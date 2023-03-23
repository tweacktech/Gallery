<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $wishlists = $user->wishlists;

        return view('wishlists.index', compact('wishlists'));
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
