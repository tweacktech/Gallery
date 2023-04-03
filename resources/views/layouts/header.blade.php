<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>{{ config('app.name', 'Babe') }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
  <!-- MDB -->
  <link rel="stylesheet" href="{{url('css/mdb.min.css')}}" />
  <link rel="stylesheet" href="{{url('style.css')}}">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>
  <!-- Start your project here-->
  <header class=" fixd-top">
    <!-- Jumbotron -->
    <div class="header_top">
      <div class="alert my-0 alert-dismissible fade show" style=" border-radius: 0px; background-color: #00659D;"
        role="alert">
        <p class="text-center mb-0 text-white"><strong>GET UPTO 40% OFF!</strong> <span class="d-none d-lg-inline">on
            your
            first Order</span> <a class="text-white" href="3">More details</a></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>

    <div class="py-1 ps-5 bg-dark">
      <div class="ms-lg-5 me-0 d-flex justify-content-between align-items-center text-white">
        <div>
          <select style="border: black; width:4.5rem; font-size: 12px;" class="form-slect bg-dark text-white"
            aria-label="Default select example">
            <option selected>English</option>
            <option value="1">French</option>
            <option value="2">Poruguese</option>
            <option value="3">Spanish</option>
          </select>

          <select style="border: black; width:3.6rem; font-size: 12px;" class="form-slect  bg-dark text-white"
            aria-label="Default select example">
            <option selected>USD</option>
            <option value="1">Naira</option>
            <option value="2">Euros</option>
            <option value="3">Pounds</option>
          </select>
        </div>
        <!-- if usession is set -->
                    
        <div class="d-flex small-text justify-content-between">
          <p class="d-none my-auto d-lg-block ">Collection point</p>
          <!-- <p class="d-none my-auto d-lg-block mx-2">Welcome User</p> -->
          <div>
            <div class="dropdown">
              <button class="btn btn-secondary small-text dropdown-toggle me-md-3 bg-dark text-white" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                My Account
              </button>
              <ul class="dropdown-menu">
                  @guest 
                         @if (Route::has('login'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                <li>
                  <a class="dropdown-item" href="{{url('/dashboard')}}">DASHBOARD</a>
                </li> 
                <li>
                  <a class="dropdown-item" href="{{url('/order')}}">ORDERS</a>
                </li>
                <li>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
                        @endguest
                
                
              </ul>
            </div>
          </div>
        </div>
        <!-- end  -->

      </div>
    </div>

    <div class="ps-3 header_middle">
      <div class="py-0 text-center border-bottom bg-white text-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 d-flex justify-content-center justify-content-md-start ps-lg-5 mb-3 mb-md-0">
              <a href="{{url('/')}}" class="ms-3">
                <img src="{{url('bundles/images/landing/gallery_logo.png')}}" height="80" />
              </a>
            </div>

            <div class="col-md-4 mt-2">
              <form class="d-flex mt-2 m-auto my-auto mb-3 mb-md-0" method="POST" action="{{url('Search')}}">
                @csrf
                   <div style=" height:3rem" class="input-group mb-3">
                  <input placeholder="Search" type="text" class="form-control h-100"
                    aria-label="Text input with dropdown button" name="search" required>
                 
                  <button type="submit" style="border-radius: 0px; background-color: #23A6F0; height: 100%; padding: 0.5rem 1rem"
                    class="input-group-text pb-2 border-0 d-lg-flex"><i class="fas fa-search text-white"></i></button type="submit">
                </div>
              </form>
            </div>

            <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
              <div class="d-flex me-3">
               
                  <a class="text-reset" href="{{url('wishlist')}}"  >
                    
                    <span > <i class="badge rounded-pill badge-notification bg-danger"> </i></span>

                    @php
                   $user=Auth::user();
                   if($user){
                    @endphp
                       <span class="badge rounded-pill badge-notification bg-danger">@php  $count = DB::table('wishlists')->where('user_id',$user->id)->count(); if($count!=0){ echo $count; }  @endphp</span>
                       @php
                     }else{
                    @endphp
                     <span class="badge rounded-pill badge-notification bg-danger"> @php   $wishlist = session()->get('wishlist')?? []; 
                     $count = count($wishlist);  if($count!=0){ echo $count; }  @endphp</span>
                    @php
                  }
                    @endphp
                    <img src="bundles/images/lit-icons/Vector.png" style="margin-right: -0.4rem; font-size: 20px;" alt="">
                  
                  </a>
                  
                </div>

                <!-- Notification -->
                <a class="text-reset mt-2 me-3" href="{{url('cart')}}">
                  <span><i class="fas fa-shopping-cart"> </i></span>                              
                   @php
                   $user=Auth::user();
                   if($user){
                    @endphp
                       <span class="badge rounded-pill badge-notification bg-danger">@php  $count = DB::table('carts')->where('user_id',$user->id)->where( 'status',0)->count(); if($count!=0){ echo $count; }  @endphp</span>
                       @php
                     }else{
                    @endphp
                     <span class="badge rounded-pill badge-notification bg-danger"> @php   $cart = session()->get('cart')?? []; 
                    $count = count($cart); if($count!=0){echo $count;} @endphp</span>
                    @php
                  }
                    @endphp
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <hr> -->
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-scroll bg-white shadow-0">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="#">NEW IN</a>
        <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-start align-items-center">
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-links navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav mx-auto mb-3 mt-1">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('bath')}}">NEW IN</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{URL('bath')}}">BATHING & CHANGING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('bath')}}">BABY SAFETY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('bath')}}">FEEDING & WEANING</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{URL('bath')}}">TOYS & GIFT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('bath')}}">BABY CARE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('bath')}}">OFFER SETS & BUNDLES</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{URL('bath')}}">PARENTS ROOM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('bath')}}">BLOG</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@include('sweetalert::alert')


@yield('content')





<footer>
    <div class="text-center container px-16 text-lg-start pb-3 pt-5 text-muted">
      <!-- Section: Social media -->
      <div class="container">
        <div class="row me-md-4">
          <div class="col-6">
            <div class="me-5 d-none d-lg-block">
              <h4 style=" font-weight: 600;" class="sign-h4 text-dark">SIGN UP FOR NEWSLETTER & GET
                ALL UPDATES</h4>
              <span>Lorem ipsum dolor sit amet, sed do eiusmod tempor incdidunt ut labore et.</span>
            </div>
            <!-- Left -->
          </div>
          <div class="col-1"></div>
          <div class="col-lg-5">
            <!-- Right -->
            <div class="input-group">
              <div style="height: 3rem; border: 0 !important;" class="form-outline">
                <input id="search-input" type="email" id="form1" class="form-control" />
                <label class="form-label" for="form1">Your Email</label>
              </div>
              <button id="search-button" type="button" class="btn footer-bg">
                Subscribe
              </button>
            </div>
            <!-- Right -->
          </div>
          <!-- <div class="col-1"></div> -->
        </div>
      </div>
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
      </section>

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-4 mx-0 mb-4">
              <!-- Content -->
              <h6 class=" text-dark sign-h4 mb-4">
                Store
              </h6>
              <img src="{{url('bundles/images/landing/gallery_logo.png')}}" height="80" style="margin-left: -1rem;" />

              <p class="pt-4">1223, Main Street, Anytown New York, 38000 USA
               <p> 888 - 963 - 600</p>
              </p>
              <p>info@gallerybebe.ng</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mx-0 mb-4">
              <!-- Links -->
              <h6 class=" text-dark sign-h4 mb-4">
                Product Support
              </h6>
              <p>
                <a href="#!" class="text-reset">Bottles Feeding</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Soother</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Accessories</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Baby Care</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Eating & Drinking</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Bottle Cleaning</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mx-0 mb-4">
              <!-- Links -->
              <h6 class=" text-dark sign-h4 mb-4">
                Shop Support
              </h6>
              <p>
                <a href="#!" class="text-reset">Order Status</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Shipping Map</a>
              </p>
              <p>
                <a href="#!" class="text-reset">My Account</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Order FAQs</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Return Policy</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Collection Points</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 ps-5 mx-0 mb-md-0 mb-4">
              <!-- Links -->
              <h6 class=" text-dark mb-4 sign-h4">Socials</h6>
              <div class="text-dark">
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
                </a>
              </div>
              <div class="mt-3">
                <h5 class="mb-2 text-dark sign-h4" style="font-weight: 700;">Secure Payment</h5>
                <img class="img-fluid" src="{{url('bundles/images/lit-icons/master-card-logo.png')}}" alt="">
                <img class="img-fluid" src="{{url('bundles/images/lit-icons/visa-pay-logo.png')}}" alt="">
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

          </section>
        </div>
      </section>
      <!-- Section: Links  -->
    </div>

    <!-- Copyright -->
    <div class="text-center pt-3 pb-5 bg-white">
      <strong> © 2023 gallery BEBE | All Rights Reserved</strong>
      <!-- <a class="text-reset sign-h4" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- MDB -->
  <script type="text/javascript" src="{{url('js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{url('countryList.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

  <!--javaScript Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
     crossorigin="anonymous"></script> -->
  <!-- <script src="bundles/owlcarousel/owl.carousel.min.js"></script> -->
  <!-- <script src="bundles/js/bootstrap.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>



  <!-- javaScript -->
  <script src="app.js"></script>
</body>

</html>