@extends('layouts.header')

@section('content')
 

  <main>
    
    
      <div class="p-2">
        
         
        </div>

      <div class="container">
    <div class="row justify-content-center">

       
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <center><h3>Order History</h3></center> <div style="float: right;"> <a href="{{url('payment_history')}}">Payment History</a></div>
                 </div>

                <div class="card-body">   
                    <div class="row">

                        <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL PRICE</th>
        <th>DATE</th>
        
      </tr>
    </thead>
    <tbody>
        @php $num=0;@endphp
        @foreach($carts as $da)
      <tr>       
        <td>{{$num+=1}}</td>
        <td><img src="/products/{{$da->image}}" style="width:30%; "></td>
        <td>{{$da->name}}</td>
        <td>NGN {{$da->price}}</td>
        <td>{{$da->quantity}}</td>
        <td>NGN {{$da->price*$da->quantity}}</td>
       
        <td >{{$da->created_at}} </td>
  @endforeach
      </tr>
    </tbody>
  </table>
  </div>

</div>



                </div>

                <div class="card-header">

                </div>
                <div class="card-header">
                  
                 </div>
            </div>
        </div>
     
    <div class="col-md-6"></div>
    </div>
</div>  
<br>

  </main>

  <!-- Footer -->
  @endsection