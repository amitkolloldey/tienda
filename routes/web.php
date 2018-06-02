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
Route::get('/shop', 'ProductsController@index')->name('shop.products');
Route::get('/product/{slug}', 'ProductsController@show')->name('single.product');
Route::resource('/cart', 'CartController');
Route::resource('/checkout', 'CheckoutController')->middleware('auth');
Route::get('/cart/create/{pro_id}', 'CartController@create')->name('cart.product.create');
Route::post('/cart/create/{pro_id}', 'CartController@createSingleCart')->name('cart.single.product.create');
Route::get('/category/{category_slug}', 'ProductsController@category')->name('product.category');
Route::post('/apply_coupon', 'CouponController@apply_coupon')->name('coupon.apply');
Route::delete('/remove_coupon', 'CouponController@remove')->name('coupon.remove');
Route::get('/price_filter', 'ProductsController@price_filter')->name('product.price_filter');
Route::get('/paypal', function (){
    return view('front.paypal');
})->name('paypal.payment')->middleware('auth');
Route::get('/orders','OrdersController@index')->name('order.index')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
