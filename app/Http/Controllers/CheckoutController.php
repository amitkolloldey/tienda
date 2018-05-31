<?php

namespace App\Http\Controllers;

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
        $contents = Cart::content()->map(function ($item) {
            return $item->model->name.'|'.$item->qty;
        })->values()->toJson();
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email_address' => 'required|email|max:255',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'state' => 'required|max:255',
            'post_code' => 'required|numeric',
            //'g-recaptcha-response' => 'required|captcha'
        ]);
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
            session()->forget('coupon');
            Cart::destroy();
            return redirect(route('order.index'))->with('order_message','Your Order Was Successfully Created');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
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

}
