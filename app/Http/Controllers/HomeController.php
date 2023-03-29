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
       $count = DB::table('carts')->where('user_id',$user->id)->where( 'status',0)->count();
        $wallet=DB::table('wallets')->where('user_id',$user->id)->sum('ballance');
           return view('customer.dashboard',compact('user','count','wallet'));
    }


     public function update()
    {
        $user = Auth::user('id');
       $count = DB::table('carts')->where('user_id',$user->id)->where( 'status',0)->count();

        return view('customer.update_user',compact('user','count'));
    }

     public function profile()
    {
        $user = Auth::user('id');
       $count = DB::table('carts')->where('user_id',$user->id)->count();
         $wallet=DB::table('wallets')->where('user_id',$user->id)->sum('ballance');
        return view('customer.profile',compact('user','count','wallet'));
    }



     public function store_update(Request $request)
    {
    $user = Auth::user();
    
    // validate input
    $validated = $request->validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'country' => ['nullable', 'string', 'max:255'],
        'state' => ['nullable', 'string', 'max:255'],
        'phone_number' => ['nullable', 'string', 'max:20'],
        'address' => ['nullable', 'string', 'max:255'],
        'profile_image' => ['nullable', 'image', 'max:2048'],
    ]);
    
    // update user information
    $user->first_name = $validated['first_name'];
    $user->last_name = $validated['last_name'];
    $user->country = $validated['country'];
    $user->state = $validated['state'];
    $user->phone_number = $validated['phone_number'];
    $user->address = $validated['address'];
    
    if ($request->hasFile('profile_image')) {
        // upload and save new profile image
        $image = $request->file('profile_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('profile_images', $image, $filename);
        $user->profile_image = $filename;
    }
    
    $user->save();
    
    return redirect()->back()->with('success', 'User information updated successfully.');

    }







    public function handleGoogleCallback(Request $request)
{
    $user = Socialite::driver('google')->user();

    // Add your logic to handle the authenticated user here

    return redirect('/dashboard');
}

}
