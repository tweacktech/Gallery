<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;

class CartController extends Controller
{


      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $carts = DB::table('carts')->where('user_id',$user->id)->join('products','products.id','carts.product_id')->select('products.name','products.price','products.description','carts.id')->get();
        $sum= DB::table('carts')->where('user_id',$user->id)->join('products','products.id','carts.product_id')->sum('price');
        $count = DB::table('carts')->where('user_id',$user->id)->count();
        return view('customer.cart', compact('carts','count','sum'));
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
 Alert::success('Success', 'Item added successful.');
        
        return redirect()->back()->with('success','Item added to cart');
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->input('quantity');
        $cart->save();
         Alert::success('Success', 'Item updated');
        return redirect()->route('carts.index');
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
             $cart->delete();
              Alert::warning('warning', 'Item removed');
        return redirect()->back()->with('success','Item removed');
        }
       Alert::warning('warning', 'Item does not exist ');

        return redirect()->back();
    }
}
