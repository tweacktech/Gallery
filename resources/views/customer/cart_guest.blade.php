@extends('layouts.header')

@section('content')
 

  <main>
    
    <section class="adjust">
    
      <br>    
        
  <div class="container">
    <div class="row justify-content-center">
        @php
        $m=0;
        $carts = session()->get('cart');
        if( count(session()->get('cart')?? [])!=0){
        @endphp
        @foreach($carts  as $id => $item)
         

       <div class="col-md-8 col-lg-4">
                                <div class="img-border">
                                    <div class="hovereffect">
                                        <div class="slider-image">
                                            <img src="{{url('/products',$item['image'])}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        
                                        <div class="overlay">
                                            <h2>
                                                <div>
                                                    <button style=" font-size: 10px; padding: 0.6rem;" type="button"
                                                        class="btn btn-danger">sales</button>
                                                </div>
                                            </h2>
                                            <p>
                                            <div class="div">
                                                <div class="d-flex card-icons">
                                                    <div>
                                                        <a href="">
                                                            <img src="bundles/images/lit-icons/Vector.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="">
                                                            <img src="bundles/images/lit-icons/icn favorite.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="">
                                                            <img src="bundles/images/lit-icons/icon-eye.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="amount">{{$item['name']}}</h6>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm rating-btn">
                                                    <i class="fa-solid star fa-star"></i> 4.9
                                                </button>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <p>{!!  substr(($item['description']),0,20) !!}....
                                            </p>
                                        </div>
                                        <div>
                                            <p class="amount"><b>Unitprice :NGN {{ $item['price']}}</b>
                                                <br>
                                             <b> Total Price: NGN{{$item['quantity']*$item['price']}}</b>
                                             </p>

                                        @php
                                            $p =$item['quantity']*$item['price'];
                                            $m +=$p;

                                        @endphp
                                            <p class="amount">  <a href="{{url('details',$id)}}" style=" font-size: 10px; padding: 0.4rem;" type="button" class="btn btn-info">Details
                                                <img src="bundles/images/lit-icons/icon-eye.png" alt=""></a>

                                                <div class="d-flex me-4 p-2">
                                     <div style="width: 95px; height: 54px; background-color: #EAECEF;"
                                            class="d-flex justify-content-center align-items-center">
                                            <span style="font-size: 1.3rem;" class=" fw-bolder">{{$item['quantity']}}</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{url('add_quantity_cart',$id)}}" 
                                                style="padding-top: 0.2rem; padding-bottom: 0.2rem; background-color: #DBDFE3;"
                                                class="d-block border-0">+</a>
                                            <a href="{{url('sub_quantity_cart',$id)}}"
                                                style="padding-top: 0.2rem; padding-bottom: 0.2rem; background-color: #DBDFE3;"
                                                class="d-block border-0">-</a>
                                        </div>
                                         
                    <a href="{{url('remove_cart',$id)}}" class="btn btn-danger" style="height: 30px;" >X</a>
                 
                                    </div>

                                           </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
       @endforeach
       @php } @endphp
    <div class="col-lg-4 pb-5"> <hr>
 <form action="{{ url('checkout') }}" method="POST" class="p-6">
                @csrf
                <input type="number" value="{{$m}}" hidden name="total">

                @php if($m==0){

                    echo "  ";
                }else{
                    @endphp
                <button type="submit" class="btn btn-primary">Checkout ₦{{ $m}}</button>
                @php } @endphp
            </form>
             </div>
    </div>
</div>  
              
    </section>


  </main>

  <!-- Footer -->
  @endsection