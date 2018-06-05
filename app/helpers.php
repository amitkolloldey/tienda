<?php

use App\ProductReview;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;

function cartcontent()
{
    return Cart::content();
}

function paypalcartcontent()
{
    return Cart::content()->map(function ($item) {
        return $item->model->name . '|' . $item->qty;
    })->values()->toJson();
}

function carttotal()
{
    return Cart::total();
}

function cartqty()
{
    return Cart::instance('default')->count();
}

function reset_session()
{
    return [session()->forget('coupon'),
        Cart::destroy()];
}

function setActive($path)
{
    if (Request::path() == $path) {
        return "active";
    }
    return '';
}

function starRatingCount($id)
{
    $reviews = ProductReview::where('product_id',$id)->where('status',1)->get();
    $reviewsum = ProductReview::where('product_id',$id)->where('status',1)->sum('rating');
    if($reviewsum){
        $rating_avg = $reviewsum/$reviews->count();
    }else{
        $rating_avg = 0;
    }
    return [
        'rating_avg' => $rating_avg,
        'reviews'=>$reviews
    ];
}