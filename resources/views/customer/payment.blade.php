@extends('layouts.header')

@section('content')
 

  <main>
    
    <section class="adjust">
    
      <br>    
        
  <div class="container">
    <div class="row justify-content-center">
      
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    <b > AMOUNT: {{ $orders }}</b>
                 </div>

                <div class="card-body">   
         <div class="row">
                
           <div class="col-lg-4">


             <form id="paymentForm">
    <input type="email" hidden id="email-address" value="{{Auth::user()->email}}" required />

    <input type="tel" id="amount" value="{{$orders}}" required  hidden />

    <input type="text" id="first-name" value="{{Auth::user()->first_name}}" hidden  />

  <div class="form-submit">
     @php if($orders==0){

                    echo "  ";
                }else{
                    @endphp
                 <button class="btn btn-secondary btn-lg" type="submit" onclick="payWithPaystack()"> PAY WIHT PAYSTACK  </button>
                @php } @endphp
  </div>

</form>
             
           </div>


           <div class="col-lg-4">  </div>


           <div class="col-lg-4"> 

            <form method="POST" action="{{url('wallet_pay')}}" >
              @csrf
            <input type="number" name="amount" value="{{$orders}}" hidden > 
             <button class="btn btn-info btn-lg" type="submit"> PAY WITH WALLET {{ $wallet}} </button>
          </form>
            </div>
           
         </div>                                 
                </div>

            </div>
        </div>
     
 
    </div>
</div>  
              
    </section>


  </main>
  
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script >
  const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();


  let handler = PaystackPop.setup({

    key: 'pk_test_7ce279d181176a0c0af488855daf72c19ca5ff8e', // Replace with your public key

    email: document.getElementById("email-address").value,

    amount: document.getElementById("amount").value * 100,

    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

    // label: "Optional string that replaces customer email"

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){

      let message = response.reference;

      window.location.href = "verify-payment/"+message;

    }

  });


  handler.openIframe();

}
</script>

  <!-- Footer -->
  @endsection












