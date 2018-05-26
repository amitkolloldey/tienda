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
        $carttotal = Cart::total();
        $cartsubtotal = Cart::subtotal();
        $carttax = Cart::tax();

        return view('front.cart',compact('cartItems','carttotal','cartsubtotal','carttax'));
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
        return redirect(route('cart.index'))->withMessage($product->name. " Added To Cart");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
