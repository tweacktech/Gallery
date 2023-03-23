<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Notifications\OtpNotification;
use Illuminate\Support\Facades\Notification;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $otp = Str::random(6);
        // $verication=Str::random(6);
        $data= User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'country' => $data['country'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'otp' => $otp,
            'password' => Hash::make($data['password']),
        ]);

         // $data->notify(new OtpNotification($data->otp));

        Notification::send($data, new OtpNotification($data->otp));


    

    }



public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}


public function handleGoogleCallback()
{
    $otp = Str::random(6);
     $user = Socialite::driver('google')->stateless()->user();

    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser = User::create([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'country' => $user->country,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'otp' => $otp,
            'password' => Hash::make('12345678'),       
        ]);

        auth()->login($newUser, true);
    }

    return redirect()->intended('/');
}


public function otp($otp)
{
     $tp=1;
    $user = DB::table('users')->where('otp',$otp)->update(['status'=>1]);
  return redirect('/login')->with('status','acount activated');

}


}
