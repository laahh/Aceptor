<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $order = Order::create([
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'total_price' => 50000 * 1,
            'qty' => 1,
            'status' => 'unpaid'
        ]);
        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->user()->name,
                'email' => $request->user()->email
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return view('home', compact('snapToken', 'order'));
        return response()->json(['snap_token' => $snapToken, 'order' => $order]);
    }
}
