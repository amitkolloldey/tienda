<?php

namespace App\Listeners;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CartListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $code = session()->get('coupon')['code'];
        $coupon = Coupon::where('code',$code)->first();
        session()->put('coupon',[
            'code' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
            'type' => $coupon->type,
        ]);

    }
}
