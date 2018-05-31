<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        $cartsubtotal = Cart::subtotal();
        $newcartsubtotal = 0;
        if(session()->has('coupon')){
            $newcartsubtotal = Cart::subtotal() - session()->get('coupon')['discount'];
            if($newcartsubtotal < 0){
                $newcartsubtotal = 0;
            }
            $carttax = $newcartsubtotal * config('cart.tax') / 100;
            $carttotal = $carttax + $newcartsubtotal;
        }else{
            $carttotal = Cart::total();
            $carttax = Cart::tax();
        }
        return view('front.cart')->with([
            'cartItems'=>$cartItems,
            'carttax'=>$carttax,
            'cartsubtotal'=>$cartsubtotal,
            'carttotal'=>$carttotal,
            'newcartsubtotal'=>$newcartsubtotal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pro_id)
    {
        $product =Product::findOrFail($pro_id);
        Cart::add(['id' => $pro_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price])->associate('App\Product');
        return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $product = $request->qty;
        Cart::update($rowId, $product);
        return redirect(route('cart.index'))->withMessage("Cart Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect(route('cart.index'))->withMessage("Item Removed");
    }
}
