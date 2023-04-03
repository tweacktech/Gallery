<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WalletController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $count = DB::table('carts')->where('user_id',$user->id)->where( 'status',0)->count();
       $products = DB::table('products')->SimplePaginate(10);
    return view('customer.index',compact('count','products','category'));
          }
      $category = Category::all();
       $products = DB::table('products')->SimplePaginate(10);
    return view('customer.index',compact('products','category'));
});

// wallet_view
Route::get('/add_wallet',[App\Http\Controllers\WalletController::class, 'add_wallet'] )->name('Wallet');

Route::post('/wallet_pay',[App\Http\Controllers\WalletController::class, 'wallet_pay'] )->name('Pay with Wallet');



Route::post('/Search',[App\Http\Controllers\ProductController::class, 'Search'] )->name('Search');
Route::get('/Stores',[App\Http\Controllers\ProductController::class, 'index'] )->name('Stores');
Route::post('/filter',[App\Http\Controllers\ProductController::class, 'filter'] )->name('Stores');

Route::get('/bath',[App\Http\Controllers\ProductController::class, 'bath'] )->name('Stores');

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class, 'show'] )->name('Details');

Auth::routes();
Route::get('/cart',[App\Http\Controllers\CartController::class, 'index'] );
Route::get('/add_quantity_cart/{id}',[App\Http\Controllers\CartController::class, 'existing_add_cat'])->name('Remove');
Route::get('/sub_quantity_cart/{id}',[App\Http\Controllers\CartController::class, 'existing_sub_cat'])->name('Remove');
Route::get('/remove_cart/{id}',[App\Http\Controllers\CartController::class, 'destroy'])->name('Remove');
Route::post('/cart',[App\Http\Controllers\CartController::class, 'store'] );

Route::get('/wishlist',[App\Http\Controllers\WishlistController::class,'index']);
Route::get('/remove_wishlist/{id}',[App\Http\Controllers\WishlistController::class,'destroy'])->name('Remove');
Route::post('/wishlist',[App\Http\Controllers\WishlistController::class,'store']);

Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'] )->name('Dashboard');
Route::get('/Update',[App\Http\Controllers\HomeController::class, 'update'] )->name('Dashboard');
Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'] )->name('Profile');
Route::post('/update_profile',[App\Http\Controllers\HomeController::class, 'store_update'] )->name('Profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
Route::get('/payment_history', [App\Http\Controllers\OrderController::class, 'payment_history'])->name('History');
Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'store'])->name('Checkout')->middleware('auth');

Route::get('/otp/{otp}',[App\Http\Controllers\Auth\RegisterController::class, 'otp'] )->name('OTP');
Route::post('/otp_verify',[App\Http\Controllers\Auth\RegisterController::class, 'otp_verify'] );
// google
Route::get('login/google', [App\Http\Controllers\Auth\RegisterController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\RegisterController::class, 'handleGoogleCallback']);
// facebook
Route::get('/facebook/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.Facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookleCallback']);
// linkin
Route::get('/linkin/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkin'])->name('login.ToLinkin');
Route::get('/auth/linkin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleToLinkinleCallback']);

// paystack
Route::get('payment', [PaymentController::class, 'payment'])->name('payment.pay');
Route::get('verify-payment/{reference}', [PaymentController::class, 'PaymensV'])->name('payment.verify');

// add money to wallet
Route::get('verify-payment-wallet/{reference}', [PaymentController::class, 'PaymensW'])->name('Wallet.verify');


  // About Terms and Policy
    Route::get('aboutus', function () {
        return view('aboutus');
    });

    Route::get('terms', function () {
        return view('terms');
    });

       Route::get('contact', function () {
        return view('contact');
    });
    Route::get('policy', function () {
        return view('privacy');
    });
