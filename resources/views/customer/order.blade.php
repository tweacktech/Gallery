@extends('layouts.header')

@section('content')
 

  <main>
    
    
    <section class="adjust">

      <div class="row">
        @foreach($order as $order)
                        <div class="col-md-3">
                            <div class="product-container">
                                <div>
                                    <img class="img-fluid" src="{{url('bundles/images/landing/card-cover-3.jpg')}}" alt="">

                                </div>
                            </div>
                          
                        </div>
                         <div class="col-md-3">
                                <div class="my-3">
                                    <h3 style="color: black; font-size: 2.5em; white-space: nowrap;" class="fw-bolder">
                                        {{$order->name}}</h3>
                                    <h6 style="color:;" class="fw-bolder mt-1">NGN {{$order->price}}</h6>
                                </div>
                                
                                <div style="font-size: 1rem; color: black;">
                                    <h6><b>Product ID</b>: 1004</h6>
                                    <h6><b>Catergory</b>: Rings</h6>
                                    <h6><b>Available</b>: Instock</h6>
                                </div>
                                
                                <div class="d-flex mb-3">
                                    <div class="btn btn-primary">
                                        <button>ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
              
        @endforeach
        
      </div>

      <br>
      <section>
           
        </section>

     
    </section>


  </main>

  <!-- Footer -->
  @endsection