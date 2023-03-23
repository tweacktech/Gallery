@extends('layouts.header')

@section('content')
 

  <main>
    <section class="slider-container">
      <div class="main-container">
        <div class="main-slider">
          <div><img src="{{url('bundles/images/landing/bg-image.jpg')}}" class="d-block w-100" alt="Sunset Over the City" />
          </div>
          <div><img src="{{url('bundles/images/landing/bg-image-2.png')}}" class="d-block w-100" alt="Sunset Over the City" />
          </div>
          <div><img src="{{url('bundles/images/landing/bg-image-3.png')}}" class="d-block w-100" alt="Sunset Over the City" />
          </div>
        </div>
      </div>
    </section>
    
    <section class="adjust">

      <div class="row">
        @foreach($products as $products)

              <div style="font-size: 0.9rem; color: black;" class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-container">
                                <div>
                                    <img class="img-fluid" src="{{url('bundles/images/landing/card-cover-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="sub-product"><img src="{{url('bundles/images/landing/card-cover-3.jpg')}}" class="img-fluid" alt=""
                                        srcset=""></div>
                                <div class="mx-2 sub-product"><img src="{{url('bundles/images/landing/card-cover-3.jpg')}}" class="img-fluid" alt=""
                                        srcset=""></div>
                                <div class="sub-product"><img src="{{url('bundles/images/landing/card-cover-3.jpg')}}" class="img-fluid" alt=""
                                        srcset=""></div>
                            </div>
                        </div>
                        <div class=" ps-4 col-md-6">
                            <div class="d-flex">
                               
                            <div class="">
                                <div class="my-3">
                                    <h3 style="color: black; font-size: 2.5em; white-space: nowrap;" class="fw-bolder">
                                        {{$products->name}}</h3>
                                    <h6 style="color: #00659D;" class="fw-bolder mt-3">NGN {{$products->price}}</h6>

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
                        </div>
                    </div>
                </div>
              </div>
        @endforeach
        
      </div>

      <br>
      <section>
            <div class="container-fluid mt-n2 d-flex pt-6" style=" align-items: center; background-color: #00659D; min-height: 2rem; color: white;">
                <div class="container">
                    
                </div>
            </div>
        </section>

      <div class="container px-16">


        <div class="container-fluid my-5">
          <div class="my-slider">
            <div><img src="{{url('bundles/images/landing/HIPSTER.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/VONDE.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/norway.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/avante.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/matuska.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/tylertone.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/neoquen.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/orange.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/HIPSTER.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/VONDE.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/norway.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/avante.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/matuska.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/tylertone.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/neoquen.png')}}" alt=""></div>
            <div><img src="{{url('bundles/images/landing/orange.png')}}" alt=""></div>
          </div>
        </div>
      </div>
    </section>


  </main>

  <!-- Footer -->
  @endsection