<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $user = Auth::user();

        $this->validate($request,[
            'rating'=>'required|integer|between:1,5',
            'comment'=>r'required|string|max:500',
        ]);

        $review = Review::where('user_id', $user->id)->where('product_id', $product_id)->first();

        if (!$review) {
            $review = new Review;
            $review->user_id = $user->id;
            $review->product_id = $product_id;
            $review->rating = $request->input('rating');
            $review->comment = $request->input('comment');
            $review->save();
        }

        return redirect()->back()->with('success','Review has been added');
}

    public function destroy(Review $review){

        $this->authorize('detete',$review);
        $review->delete();
        return redirect()->back()->with('success','Review has been deleted');
    }