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
      $category = Category::all();
        $count = DB::table('carts')->where('user_id',$user)->count();
       $products = DB::table('products')->SimplePaginate(10);
    return view('customer.index',compact('count','products','category'));
});



Route::post('/Search',[App\Http\Controllers\ProductController::class, 'Search'] )->name('Search');
Route::get('/Stores',[App\Http\Controllers\ProductController::class, 'index'] )->name('Stores');

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class, 'show'] )->name('Details')->middleware('auth');

Auth::routes();
Route::get('/cart',[App\Http\Controllers\CartController::class, 'index'] );
Route::get('/wishlist',[App\Http\Controllers\WishlistController::class,'index']);
Route::post('/cart',[App\Http\Controllers\CartController::class, 'store'] );
Route::post('/wishlist',[App\Http\Controllers\WishlistController::class,'store']);
Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'] )->name('Dashboard');
Route::get('/Update',[App\Http\Controllers\HomeController::class, 'update'] )->name('Dashboard');
Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'] )->name('Profile');

Route::get('/otp/{otp}',[App\Http\Controllers\Auth\RegisterController::class, 'otp'] )->name('OTP');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('home');

// google
Route::get('login/google', [App\Http\Controllers\Auth\RegisterController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\RegisterController::class, 'handleGoogleCallback']);

// Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.Facebook');
// Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookleCallback']);

Route::get('/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback', function () {
     $user = Socialite::driver('google')->stateless()->user();


    // Do something with the user data (e.g. create a new user, log them in, etc.)

    return redirect('/home');
});