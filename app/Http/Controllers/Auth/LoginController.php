<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Social;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


// google
public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

// redirect google

public function handleGoogleCallback()
{
    $user = Socialite::driver('google')->stateless()->user();
    // $user = Socialite::driver('google')->user();

    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        $existingUser = Auth::user();
        return redirect()->intended('/dashboard');
    } else {
        $newUser = User::create([
            'first_name' => $user->userfirst_name,
            'last_name' => $user->last_name,
            'country' => $user->country,
            'email' => $user->email,
            'status' => 1,
        ]);
        $newUser = Auth::user();
      
                return redirect()->intended('dashboard');
    }

    return redirect()->intended('/dashboard');
}

// facebook
public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}
// callbackfacebook

public function handleFacebookleCallback()
{
    $user = Socialite::driver('facebook')->stateless()->user();
    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        $existingUser = Auth::user();
        return redirect()->intended('/dashboard');
    } else {
        $newUser = User::create([
            'first_name' => $user->userfirst_name,
            'last_name' => $user->last_name,
            'country' => $user->country,
            'email' => $user->email,
            'status' => 1,
        ]);

        $newUser = Auth::user();
      
                return redirect()->intended('dashboard');
    }

    return redirect()->intended('/dashboard');
}


public function redirectToLinkin()
{
    return Socialite::driver('linkin')->redirect();
}

public function handleToLinkinleCallback()
{
    $user = Socialite::driver('linkin')->stateless()->user();
    
    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        $existingUser = Auth::user();
        return redirect()->intended('/dashboard');
    } else {
        $newUser = User::create([
            'first_name' => $user->userfirst_name,
            'last_name' => $user->last_name,
            'country' => $user->country,
            'email' => $user->email,
            'status' => 1,
        ]);

        $newUser = Auth::user();
      
                return redirect()->intended('dashboard');
    }

    return redirect()->intended('/dashboard');
}


public function mergeCart(Request $request)
{
    
    if ($user = Auth::user()) {
        // code...
    
    $cart = session()->get('cart');

    if ($cart) {
        foreach ($cart as $key => $item) {
            $product = Product::findOrFail($item['product_id']);

            $userCart = Cart::where('user_id', $user->id)
                ->where('product_id', $product->id)
                ->first();
            if ($userCart) {
                $userCart->update([
                    'quantity' => $userCart->quantity + $item['quantity'],
                ]);
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                ]);
            }
        }

        session()->forget('cart');

        return redirect()->intended('cart')->with('success', 'Cart items have been merged to your account.');
    }

    return redirect()->intended('cart')->with('warning', 'No items found in your cart.');
}
}

}
