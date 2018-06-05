<?php

namespace App\Http\Controllers;

use App\Product;
use Bhavinjr\Wishlist\Facades\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $products = Wishlist::getUserWishlist(Auth::user()->id)->load('product');
        return view('front.wishlist',compact('products'));
    }

    public function create($pro_id){
        Wishlist::add($pro_id, Auth::id());
        return back()->withMessage("Item Added To Wishlist");
    }

    public function remove($id){
        Wishlist::remove($id);
        return back()->withMessage("Item Removed");
    }

    public function cart_create()
    {
        $products = Wishlist::getUserWishlist(Auth::user()->id)->load('product');
        foreach ($products as $product){
            Cart::add(
                ['id' => $product->product->id, 'name' => $product->product->name, 'qty' => 1, 'price' =>
                    $product->product->price ? $product->product->price : $product->product->sale_price]
            )->associate('App\Product');
        }
        Wishlist::removeUserWishlist(Auth::id());
        return redirect(route('cart.index'))->withMessage("Added To Cart");
    }

}
