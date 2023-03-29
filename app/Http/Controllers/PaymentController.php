<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Cart;
use DB;
use Alert;
class PaymentController extends Controller
{

public function payment(){

    $user = Auth::user('id');
     
        $count = DB::table('carts')->where('user_id',$user->id)->where( 'status',0)->count();
       $orders = DB::table('orders')->where('user_id',$user->id)->where('status',0)->sum('total_price');
    return view('customer.payment',compact('count','orders'));
    

}




    public function pay(Request $request)
    {
        $amount = $request->input('amount');
        $email = $request->user()->email;
        $reference = Paystack::genTranxRef();
        $callbackUrl = $request->input('callback_url');
        $paymentUrl = Paystack::getAuthorizationUrl()->redirectNow();
        return view('payment.pay', compact('amount', 'email', 'reference', 'callbackUrl', 'paymentUrl'));
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
$ma= json_decode( $response);
  if ($ma->status==true) {


     $user = Auth::user();
        $carts = Cart::where('user_id',$user->id)->get();
       
        $order = Order::where('user_id',$user->id)->where('status',0)->update(['status'=>1]);
        
        foreach ($carts as $cart) {
            $cart->where('status',1)->update(['status'=>2]);
        }

     Alert('success','payment success');
     return redirect()->back();
  }
Alert('warning','payment not success');
        // return $response;
return redirect()->back();

    }

      public function verifys(Request $request)
    {
        $reference = $request->input('reference');
        $paymentDetails = Paystack::getPaymentData($reference);
        if ($paymentDetails['data']['status'] === 'success') {
            // Payment was successful, update order status and redirect to success page
            return redirect()->route('payment.success');
        } else {
            // Payment failed, redirect to failure page
            return redirect()->route('payment.failure');
        }
    }
}
