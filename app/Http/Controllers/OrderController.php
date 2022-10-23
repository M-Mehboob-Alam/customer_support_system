<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        // return $request;
        $order = new Order();
        $order->user_id = $request->user_id ;
        $order->price = $request->amount ;
        $order->package_id = $request->package_id ;
        $order->contry = $request->country ;
        $order->city = $request->city ;
        $order->address = $request->address ;
        $order->save();
        return redirect()->route('home')->with('success', 'Your Order has been placed successfully');
    }
}
