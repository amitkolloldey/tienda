<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->sortby == 'low_to_high') {
            $products =Product::orderBy('price')->paginate(18);
        } elseif (request()->sortby == 'high_to_low') {
            $products = Product::orderBy('price', 'desc')->paginate(18);
        }else{
            $products = Product::where('status','published')->paginate(18);
        }
        return view('front.shop',compact('products'));
    }


    public function price_filter(Request $request)
    {
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $products = Product::whereBetween('price', [$min_price, $max_price])->get();
        if ($products) {
            if (request()->ajax()) {
                return view('front.filteredproducts',compact('products'));
            }
        }
        return "Error";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category_slug)
    {
        $product_category = ProductCategory::findBySlugOrFail($category_slug);
        $category_products = ProductCategory::findBySlugOrFail($category_slug)->products()->paginate(18);
        return view('front.category',compact('product_category','category_products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::findBySlugOrFail($slug);
        return view('front.singleproduct',compact('product'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}
