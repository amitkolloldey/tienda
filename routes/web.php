<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/shop', 'productsController@index')->name('shop.products');
Route::get('/product/{slug}', 'productsController@show')->name('single.product');
Route::resource('/cart', 'CartController');
Route::resource('/checkout', 'CheckoutController')->middleware('auth');
Route::get('/cart/create/{pro_id}', 'CartController@create')->name('cart.product.create');
Route::get('/category/{category_slug}', 'productsController@category')->name('product.category');
Route::post('/apply_coupon', 'CouponController@apply_coupon')->name('coupon.apply');
Route::delete('/remove_coupon', 'CouponController@remove')->name('coupon.remove');
Route::get('/price_filter', 'productsController@price_filter')->name('product.price_filter');
Route::get('/orders', function (){
    return view('front.orders');
})->name('order.index')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
