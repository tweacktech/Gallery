<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use DB;
class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $order = Order::where('user_id',$user->id);
        $count = DB::table('carts')->where('user_id',$user->id)->count();
        return view('customer.order', compact('order','count'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id',$user->id)->get();
        $total = $request->total;

        $order = new Order;
        $order->user_id = $user->id;
        $order->total_price = $total;
        $order->save();

        foreach ($carts as $cart) {
            $cart->delete();
        }
        Alert::success('Success','Order has been made succesfully')
        return redirect()->Intended('orders');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
    }
}
