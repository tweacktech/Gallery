<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Wallet;
use DB;
use Alert;

class WalletController extends Controller
{
    public function show()
    {
        $wallet = Auth::user()->wallet;
        return view('wallet.show', compact('wallet'));
    }

    public function add_wallet(){
        return view('customer.add_wallet');
    }


    public function wallet_pay(Request $request){
        $user=Auth::user();
        $amount=$request->input('amount');
        $wallet=DB::table('wallets')->where('user_id',$user->id)->sum('ballance');
        if ($wallet >= $amount ) {
         $total= $wallet-$amount;
       $udpate_ballance=  DB::table('wallets')->where('user_id',$user->id)->update(['ballance'=>$total]);
       if ($udpate_ballance) {
           $update_order=DB::table('orders')->where('user_id',$user->id)->where('status',0)->update(['status'=>1]);
           Alert('success','payment success,');
           return redirect()->back();
       }
        }
       Alert('info','Insufficient funds');
           return redirect()->Intended('');
    }

    public function deposit(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $amount = $request->input('amount');
        $wallet->balance += $amount;
        $wallet->save();
        return redirect()->route('wallet.show');
    }

    public function withdraw(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $amount = $request->input('amount');
        if ($wallet->balance >= $amount) {
            $wallet->balance -= $amount;
            $wallet->save();
            return redirect()->route('wallet.show');
        } else {
            return redirect()->route('wallet.show')->withErrors(['Insufficient funds']);
        }
    }
}
