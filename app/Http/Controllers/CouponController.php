<?php

namespace App\Http\Controllers;

use App\Coupon;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function apply_coupon(Request $request)
    {
        $code = $request->code;
        $coupon = Coupon::where('code',$code)->first();
        if($coupon->expiry_date < Carbon::now()){
            return redirect(route('cart.index'))->withErrors('Invalid Coupon Code!');
        }
        session()->put('coupon',[
            'code' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
            'type' => $coupon->type,
        ]);

        return back()->with('message', 'Coupon has been applied!');
    }

    public function remove(){
        session()->forget('coupon');
        return back()->with('message', 'Coupon has been Removed!');
    }
}
