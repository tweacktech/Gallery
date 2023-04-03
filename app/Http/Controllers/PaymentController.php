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
class PaymentController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }


public function payment(){

    $user = Auth::user('id');
       $orders = DB::table('orders')->where('user_id',$user->id)->where('status',0)->sum('total_price');
        $wallet=DB::table('wallets')->where('user_id',$user->id)->sum('ballance');
    return view('customer.payment',compact('orders','wallet'));
    
}

    public function PaymensV($reference)
    {
    $curl = curl_init();
    $key='sk_test_3ec7e1532a394a9e974953b930e50cc61690c325';
  curl_setopt_array($curl, array(

    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",

    CURLOPT_RETURNTRANSFER => true,

    CURLOPT_ENCODING => "",

    CURLOPT_MAXREDIRS => 10,
    CURLOPT_SSL_VERIFYHOST =>0,
    CURLOPT_SSL_VERIFYPEER =>0,

    CURLOPT_TIMEOUT => 30,

    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => "GET",

    CURLOPT_HTTPHEADER => array(

      "Authorization: Bearer $key",
      "Cache-Control: no-cache",

    ),

  ));

  $response = curl_exec($curl);

  $err = curl_error($curl);


  curl_close($curl);
$ma= json_decode($response);

  if ($ma->status==true) {
     $user = Auth::user();
        $carts = Cart::where('user_id',$user->id)->get();
       
        $order = Order::where('user_id',$user->id)->where('status',0)->update(['status'=>1]);
        
        foreach ($carts as $cart) {
            $cart->where('status',1)->update(['status'=>2]);
        }

     Alert('success','payment success');
     return redirect()->intended('order');
  }
Alert('warning','payment not success');
        // return $response;
return redirect()->back();

    }


     public function PaymensW($reference)
    {
    $curl = curl_init();
    $key='sk_test_3ec7e1532a394a9e974953b930e50cc61690c325';
  curl_setopt_array($curl, array(

    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",

    CURLOPT_RETURNTRANSFER => true,

    CURLOPT_ENCODING => "",

    CURLOPT_MAXREDIRS => 10,
    CURLOPT_SSL_VERIFYHOST =>0,
    CURLOPT_SSL_VERIFYPEER =>0,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer $key",
      "Cache-Control: no-cache",

    ),

  ));

  $response = curl_exec($curl);

  $err = curl_error($curl);


  curl_close($curl);
$ma= json_decode($response);

  if ($ma->status==true) {
    
     $user = Auth::user();

     $exist=wallet::where('user_id',$user->id)->first();
     if ($exist) {
        // $exist->ballance+$ma->data->amount;
        // $exist->save();
        $update_balance=Wallet::where('user_id',$user->id)->update(['ballance'=>$ma->data->amount]);
        if ($update_balance) {
           Alert('success','Added money to wallet');
     return redirect()->Intended('dashboard');
        }
     }else{
         $wallet=new Wallet;
        $wallet->user_id=$user->id;
        $wallet->ballance=$ma->data->amount;
        $wallet->save();   
          
     Alert('success','Added money to wallet');
     return redirect()->Intended('dashboard');
 }
  }
Alert('warning','payment not success');
        // return $response;
return redirect()->back();

    }

}
