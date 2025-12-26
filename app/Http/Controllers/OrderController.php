<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\MidtransService;

class OrderController extends Controller
{
    public function show(Order $order, MidtransService $midtrans)
    {
        // Pastikan user hanya bisa melihat order miliknya sendiri
         $order->load (['items','user']);
           
         $snapToken = null;
            if ($order->status === 'pending') {
                $snapToken = $midtrans->createSnapToken($order);
        }


        return view('orders.show', compact('order', 'snapToken'));
    }
}
