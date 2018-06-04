<?php

namespace App\Http\Controllers;

use App\ProductReview;
use Illuminate\Http\Request;

class ProductReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $review_per_user = ProductReview::where('user_id' ,$request->user_id)->where('product_id',
                $request->product_id)->first();

        if($review_per_user){
            return back()->withErrors(['review_error'=>'You have already submitted review on this product!']);
        }
        $this->validate($request,[
            'description' => 'required|min:10|max:200',
            'rating' => 'required'
        ]);
        ProductReview::create($request->all());
        return back()->with('review_message','Review Has Been Submitted For Approval');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductReview  $procuctReviews
     * @return \Illuminate\Http\Response
     */
    public function show(ProductReview $procuctReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductReview  $procuctReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductReview $procuctReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductReview  $procuctReviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductReview $procuctReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductReview  $procuctReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductReview $procuctReviews)
    {
        //
    }
}
