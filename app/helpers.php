<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;
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

function setActive($path)
{
    if(Request::path() == $path){
        return "active";
    }
    return '';
}