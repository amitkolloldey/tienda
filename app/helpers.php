<?php

use Gloudemans\Shoppingcart\Facades\Cart;

function cartcontent(){
    return Cart::content();
}
function paypalcartcontent(){
    return Cart::content()->map(function ($item) {
        return $item->model->name.'|'.$item->qty;
    })->values()->toJson();
}
function carttotal(){
    return Cart::total();
}
function cartqty(){
    return Cart::instance('default')->count();
}
function reset_session(){
    return [session()->forget('coupon'),
    Cart::destroy()];
}
