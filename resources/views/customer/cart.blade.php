@extends('layouts.header')

@section('content')
 

  <main>
    
    <section class="adjust">

      <div class="row">
      <br>    
        @foreach($carts as $carts)
                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 p-3">
            <div class="card">
                <div class="card-header">
                    <b >Cart {{$count}}</b>
                 </div>

                <div class="card-body">   
                    <div class="row">
                        <div class="col-md-8" ><img src="bundles/images/landing/product-cover-4.png" style="width:auto; height:100px;"> </div>
                        <div class="col-md-4">
                            <h2> {{$carts->name}}</h2>
                           <h3> ₦{{$carts->price}}</h3>
                            {!!  substr(($carts->description),0,99) !!}...
                       </div>
                    </div>

                </div>

                <div class="card-header">
                    <a href="{{url('remove_cart',$carts->id)}}" class="btn btn-danger" >Remove </a>
                 </div>
            </div>
        </div>
      
    <div class="col-md-5"></div>
    </div>
</div>  
              
        @endforeach
        
      </div>
<hr>
 <form action="{{ url('checkout') }}" method="POST">
                @csrf
                <input type="number" value="{{$sum}}" hidden name="total">
                <button type="submit" class="btn btn-primary">Checkout ₦{{ $sum}}</button>
            </form>

    </section>


  </main>

  <!-- Footer -->
  @endsection