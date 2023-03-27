<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function index()
    {
         $user = Auth::user('id');
         if (!$user) {
             // code...
            $products = DB::table('products')->SimplePaginate(10);
        $category = Category::all();
            return view('customer.products', compact('products','category'));
         }
        $count = DB::table('carts')->where('user_id',$user->id)->count();
        $products = DB::table('products')->SimplePaginate(10);
        $category = Category::all();
        return view('customer.products', compact('products','category','count'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $user = Auth::user('id');
        if ($user) {
             $products = Product::findOrFail($id);       
        $count = DB::table('carts')->where('user_id',$user->id)->count();
      return view('customer.product_details', compact('count','products'));
        }
          $products = Product::findOrFail($id);       
        $count = 0;
         return view('customer.product_details', compact('count','products'));
       
    }

    public function Search(Request $request)
    {
        $user = Auth::user('id');
        if ($user) {
        $search=$request->input('search');
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        $count = DB::table('carts')->where('user_id',$user->id)->count();
        return view('customer.search', compact('products','count'));
        }

        $search=$request->input('search');
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        $count =0;
        return view('customer.search', compact('products','count'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
