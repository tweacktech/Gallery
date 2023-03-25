<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;

class WishlistController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where('user_id',$user->id)->get();
         $count = DB::table('carts')->where('user_id',$user)->count();

        return view('customer.wishlist', compact('wishlists','count'));
    }

    public function store(Request $request)
    {

        $product_id = $request->input('product_id');
        $user = Auth::user();
        $wishlist = Wishlist::where('user_id', $user->id)->where('product_id', $product_id)->first();

        if (!$wishlist) {
            $wishlist = new Wishlist;
            $wishlist->user_id = $user->id;
            $wishlist->product_id = $product_id;
            $wishlist->save();
        }

        return redirect()->back()->with('success','Item added to wishlist');
        // return redirect()->route('wishlists.index');
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->route('wishlists.index');
    }
}
