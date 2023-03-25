<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user('id');
       $count = DB::table('carts')->where('user_id',$user->id)->count();

        return view('customer.dashboard',compact('user','count'));
    }


     public function update()
    {
        $user = Auth::user('id');
       $count = DB::table('carts')->where('user_id',$user->id)->count();

        return view('customer.update_user',compact('user','count'));
    }

     public function profile()
    {
        $user = Auth::user('id');
       $count = DB::table('carts')->where('user_id',$user->id)->count();

        return view('customer.profile',compact('user','count'));
    }




    public function handleGoogleCallback(Request $request)
{
    $user = Socialite::driver('google')->user();

    // Add your logic to handle the authenticated user here

    return redirect('/dashboard');
}

}
