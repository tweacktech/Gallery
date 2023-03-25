<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;

class CartController extends Controller
{


      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id',$user->id)->get();
        $count = DB::table('carts')->where('user_id',$user)->count();
        return view('customer.cart', compact('carts','count'));
    }

    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->where('product_id', $product_id)->first();

        if (!$cart) {
            $cart = new Cart;
            $cart->user_id = $user->id;
            $cart->product_id = $product_id;
            $cart->quantity = 1;
            $cart->save();
        } else {
            $cart->quantity += 1;
            $cart->save();
        }

        
        return redirect()->back()->with('success','Item added to cart');
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('carts.index');
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('carts.index');
    }
}
