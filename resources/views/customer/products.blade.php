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

   
 <div class="mt-1">
          <div class="py-4">
            <h2 class="text-center bold-type">products</h2>
          </div>
        </div>
<!-- display all products -->
    <section class="adjust">

      <div class="px-16">
      
        <div class="">
          <div class="my-logo">
            
            @foreach($products as $products)
            
            <div>
              <div class="hovereffect">
                <div class=""><img src="bundles/images/landing/product-cover-4.png" class="d-block w-100"
                    alt="...">
                </div>
                <!-- <img class="img-responsive" src="bundles/images/landing/card-cover-5.jpg" alt=""> -->
                <div class="overlay">
                  <h2>
                    <div>
                      <a href="{{url('details',$products->id)}}" style=" font-size: 10px; padding: 0.4rem;" type="button"
                        class="btn btn-info">Details</a>
                    </div>
                  </h2>
                  <p>
                  <div class="div">
                    <div class="card-icons">
                      <div>
                        <form method="POST" action="{{url('wishlist')}}">
                          @csrf
                          <input type="text" hidden name="product_id" value="{{$products->id}}">
                                                
                        <button type="submit">
                            <img src="bundles/images/lit-icons/Vector.png" alt="">
                        </button>
                        </form>
                       
                      </div>
                      <div>

                         <form method="POST" action="{{url('cart')}}">
                          @csrf
                          <input type="text" hidden name="product_id" value="{{$products->id}}">
                                                
                        <button type="submit">
                          <img src="bundles/images/lit-icons/icn favorite.png" alt="">
                        </button>
                        </form>
                       
                      </div>
                      </div>
                  </div>
                  </p>
                </div>
              </div>
              <div class="p-3">
                <div class="d-flex justify-content-between">
                  <div>
                    <h6 class="dept-head-6">{{$products->name}}</h6>
                  </div>
                  <div>
                    <button class="btn btn-sm rating-btn">
                      <i class="fa-solid star fa-star"></i> 4.9
                    </button>
                  </div>
                </div>
                <div class="text">
                  <p>{{$products->description}}.</p>
                </div>
                <div>
                  <p class="amount"><b>₦ {{$products->price}}</b></p>
                </div>
              </div>
            </div>
            @endforeach
        </div>


        <div class="mt-5">
          <div class="py-4">
            <h2 class="text-center bold-type">Categories</h2>
          </div>
        </div>

        <div>
          <div class="container-fluid">
            <div id="my-slider-2" class="my-slider-2">
              @foreach($category as $Category)
              <div>
                <div class="icon-bg-1 icon-body"><img class="d-block w-100"
                    src="{{url('bundles/images/lit-icons/pacifier 1.png')}}" alt="">
                </div>
              </div>
              @endforeach
             </div>
          </div>
        </div>

        <div class="mt-4">
          <div class=" my-4">
            <h2 class="text-center bold-type">Latest Blog</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
        <div class="container-fluid my-4">
          <div class="row grid-2 text-white py-4">
            <div class="col-lg-4">
              <div class="container-fluid mode py-4 row" style="background-color: #00659D;">
                <div class=" firstclass"><img src="{{url('bundles/images/landing/blog-pics2.png')}}"
                    class="align-self-end img-fluid d-block w-100 h-100" alt="">
                </div>
                <div class="">
                  <h6 class="my-3 work-text">Work at speed</h6>
                  <p style="font-size: 14px;">The gradual accumulation of information about atomic and small-scale
                    behaviour small-scale be</p>
                </div>
              </div>

            </div>
            <div class="col-lg-8">
              <div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="container-fluid d-flex py-4 row" style="background-color: #00659D;">
                      <div class="col-lg-6"><img src="{{url('bundles/images/landing/blog-pics1.png')}}"
                          class=" img-fluid d-block w-100 h-100" alt="">
                      </div>
                      <div class="col-lg-6">
                        <h6 class="my-4 work-text">Work at speed</h6>
                        <p style="font-size: 14px;">The gradual accumulation information about atomic and small-scale
                          behaviour </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="container-fluid d-flex py-4 row" style="background-color: #00659D;">
                      <div class="col-lg-6"><img src="{{url('bundles/images/landing/blog-pics3.png')}}"
                          class=" img-fluid d-block w-100 h-100" alt="">
                      </div>
                      <div class="col-lg-6">
                        <h6 class="my-4 work-text">Work at speed</h6>
                        <p style="font-size: 14px;">The gradual accumulation information about atomic and small-scale
                          behaviour </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mx mt-3">
                  <div class="col">
                    <div class="container-fluid d-flex py-4 row" style="background-color: #00659D;">
                      <div class="col-md-6">
                        <img src="{{url('bundles/images/landing/blog-pics2.png')}}"
                          class=" img-fluid d-block w-100 h-100" alt="">
                      </div>
                      <div class="col-md-6">
                        <h6 class="my-4 work-text">Work at speed</h6>
                        <p style="font-size: 14px;">The gradual accumulation of information about atomic and
                          small-scale
                          behaviour...The gradual accumulation of information about atomic and small-scale
                          behaviour...The gradual accumulation of information about atomic and small-scale
                          behaviour...The gradual accumulation of </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


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