<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
            
        ]);

        // auth()->login($newUser, true);
        // Auth::login($newUser);
        $newUser = Auth::user();
      
                return redirect()->intended('dashboard');
    }

    return redirect()->intended('/dashboard');
}


}
