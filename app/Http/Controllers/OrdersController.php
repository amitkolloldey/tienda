<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',Auth::id())->paginate(10);
        return view('front.orders',compact('orders'));
    }
}
