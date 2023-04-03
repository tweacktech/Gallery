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
        $products = DB::table('products')->SimplePaginate(10);
        $category = Category::all();
        return view('customer.products', compact('products','category'));
    }



 public function bath()
    {
        $products = DB::table('products')->SimplePaginate(10);
        $category = Category::all();
        return view('customer.bath', compact('products','category'));
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
        $product->features = $request->input('features');
        $product->price = $request->input('price');
        $product->age_group = $request->input('age_group');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $user = Auth::user('id');
        if ($user) {
             $products = Product::findOrFail($id);       
      
      return view('customer.product_details', compact('products'));
        }
          $products = Product::findOrFail($id);       
        
         return view('customer.product_details', compact('products'));
       
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
            $category = Category::all();
        
        return view('customer.search', compact('products','category'));
        }

        $search=$request->input('search');
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        
        $category = Category::all();
        return view('customer.search', compact('products','category'));
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




     public function filter(Request $request)
    {
        $products = Product::query();

        if ($request->has('age')) {
            $products->where('age_group', $request->age);
        }

        if ($request->has('category')) {
            $products->where('category', $request->category);
        }

        if ($request->has('color')) {
            $products->where('color', $request->color);
        }

        $products = $products->get();

        return view('products.index', compact('products'));
    }
}
