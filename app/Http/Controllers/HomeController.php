<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_products = Product::orderby('created_at')->take(12)->inRandomOrder()->get();
        $featured_products = Product::where('featured',1)->take(12)->inRandomOrder()->get();
        $sale_products = Product::where('sale_price','>',0)->take(12)->inRandomOrder()->get();
        $best_seller_products = Product::where('sale_price','>',0)->take(12)->inRandomOrder()->get();
        return view('front.home',compact('new_products','featured_products','sale_products','best_seller_products'));
    }
}
