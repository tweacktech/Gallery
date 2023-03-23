<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders;

        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $carts = $user->carts;
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        $order = new Order;
        $order->user_id = $user->id;
        $order->total = $total;
        $order->save();

        foreach ($carts as $cart) {
            $order->products()->attach($cart->product_id, ['quantity' => $cart->quantity]);
            $cart->delete();
        }

        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
    }
}
