<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
      $user = Auth::user('id');
      if ($user) {
        $category = Category::all();
        $count = DB::table('carts')->where('user_id',$user->id)->count();
       $products = DB::table('products')->SimplePaginate(10);
    return view('customer.index',compact('count','products','category'));
          }

      $category = Category::all();
        $count =0;
       $products = DB::table('products')->SimplePaginate(10);
    return view('customer.index',compact('count','products','category'));
});



Route::post('/Search',[App\Http\Controllers\ProductController::class, 'Search'] )->name('Search');
Route::get('/Stores',[App\Http\Controllers\ProductController::class, 'index'] )->name('Stores');

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class, 'show'] )->name('Details');

Auth::routes();
Route::get('/cart',[App\Http\Controllers\CartController::class, 'index'] );
Route::get('/remove_cart/{id}',[App\Http\Controllers\CartController::class, 'destroy'])->name('Remove');
Route::get('/wishlist',[App\Http\Controllers\WishlistController::class,'index']);
Route::get('/remove_wishlist/{id}',[App\Http\Controllers\WishlistController::class,'destroy'])->name('Remove');
Route::post('/cart',[App\Http\Controllers\CartController::class, 'store'] );
Route::post('/wishlist',[App\Http\Controllers\WishlistController::class,'store']);
Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'] )->name('Dashboard');
Route::get('/Update',[App\Http\Controllers\HomeController::class, 'update'] )->name('Dashboard');
Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'] )->name('Profile');
Route::post('/update_profile',[App\Http\Controllers\HomeController::class, 'store_update'] )->name('Profile');

Route::get('/otp/{otp}',[App\Http\Controllers\Auth\RegisterController::class, 'otp'] )->name('OTP');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'store'])->name('Checkout');

// google
Route::get('login/google', [App\Http\Controllers\Auth\RegisterController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\RegisterController::class, 'handleGoogleCallback']);

Route::get('/facebook/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.Facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookleCallback']);

Route::get('/linkin/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkin'])->name('login.ToLinkin');
Route::get('/auth/linkin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleToLinkinleCallback']);


Route::get('/payment/pay', [PaymentController::class, 'pay'])->name('payment.pay');
Route::get('/payment/verify', [PaymentController::class, 'verify'])->name('payment.verify');
Route::get('/payment/success', [PaymentController::class,'success'])->name('payment.success');
