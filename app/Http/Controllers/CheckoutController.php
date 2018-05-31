<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.checkout')->with([
            'carttax'=>$this->cart()['carttax'],
            'cartsubtotal'=>$this->cart()['cartsubtotal'],
            'carttotal'=>$this->cart()['carttotal'],
            'newcartsubtotal'=>$this->cart()['newcartsubtotal']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email_address' => 'required|email|max:255',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'state' => 'required|max:255',
            'post_code' => 'required|numeric',
            'payment_option' => 'required',
            //'g-recaptcha-response' => 'required|captcha'
        ]);
        if($request->payment_option == 'stripe'){
            $contents = Cart::content()->map(function ($item) {
                return $item->model->name.'|'.$item->qty;
            })->values()->toJson();
            try {
                $charge = Stripe::charges()->create([
                    'amount' => $this->cart()['carttotal'],
                    'currency' => 'USD',
                    'source' => $request->stripeToken,
                    'description' => 'Tienda Order',
                    'receipt_email' => $request->email_address,
                    'metadata' => [
                        'contents' => $contents,
                        'quantity' => Cart::instance('default')->count(),
                        'discount' => '$'. session()->get('coupon')['discount'],
                    ],
                ]);
                $order = $this->order($request, null,'paid','on_review');
                reset_session();
                return redirect(route('order.index'))->with('order_message','Your Order Was Successfully Created');
            } catch (CardErrorException $e) {
                $this->order($request, $e->getMessage(),'payment_failed','canceled');
                return back()->withErrors('Error! ' . $e->getMessage());
            }
        }elseif($request->payment_option == 'paypal'){
            $this->order($request, null,'on_review','on_review');
            reset_session();
            return redirect(route('paypal.payment'));
        }else{
            $this->order($request, null,'pending_payment','on_review');
            reset_session();
            return redirect(route('order.index'))->with('order_message','Your Order Was Successfully Created');
        }
    }

    /**
     * @return array
     */
    private function cart()
    {
        $cartsubtotal = Cart::subtotal();
        $newcartsubtotal = 0;
        if (session()->has('coupon')) {
            $newcartsubtotal = Cart::subtotal() - session()->get('coupon')['discount'];
            if ($newcartsubtotal < 0) {
                $newcartsubtotal = 0;
            }
            $carttax = $newcartsubtotal * config('cart.tax') / 100;
            $carttotal = $carttax + $newcartsubtotal;
        } else {
            $carttotal = Cart::total();
            $carttax = Cart::tax();
        }
        return [
            'cartsubtotal' => $cartsubtotal,
            'newcartsubtotal' => $newcartsubtotal,
            'carttax' => $carttax,
            'carttotal' => $carttotal
        ];
    }


    protected function order($request, $error,$payment_status,$order_status)
    {

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'payment_option' => $request->payment_option,
            'billing_email' => $request->email_address,
            'billing_firstname' => $request->first_name,
            'billing_lastname' => $request->last_name,
            'billing_country' => $request->country,
            'billing_city' => $request->city,
            'billing_state' => $request->state,
            'billing_postcode' => $request->post_code,
            'billing_address' => $request->address,
            'billing_phone' => $request->phone,
            'billing_altphone' => $request->alt_phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => session()->get('coupon')['discount'],
            'billing_discount_code' => session()->get('coupon')['code'],
            'billing_subtotal' => $this->cart()['cartsubtotal'],
            'billing_tax' => $this->cart()['carttax'],
            'billing_total' => $this->cart()['carttotal'],
            'error' => $error,
            'payment_status' => $payment_status,
            'order_status' => $order_status,

        ]);

        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }
        return $order;
    }
}
