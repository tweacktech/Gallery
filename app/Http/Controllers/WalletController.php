<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WalletController extends Controller
{
    public function show()
    {
        $wallet = Auth::user()->wallet;
        return view('wallet.show', compact('wallet'));
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
