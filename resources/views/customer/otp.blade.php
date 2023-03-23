@extends('layouts.header')

@section('content')
    <!-- Jumbotron -->
    <!-- Jumbotron -->

  <main>
    <div class=" container-fluid mb-5 mx-0 main-body">
      <div class="row">
        <div class="col-md-7 ms-n5">
          <!-- <div class="container"> -->
          <img src="bundles/images/landing/blog-pics2.png" class="h-0 w-100" alt="">
        </div>
        <!-- </div> -->
        <div class="container px-5 col-md-5">
          <div>
            <h5 class="text-center text-dark mb-3 customize-font mt-5"><b>OTP VERIFICATION</b></h5>
            <form class="row my-5">
              <div class="otp-container">
                <div>
                  <input type="text" name="digit-1" class="otp">
                </div>
                <div>
                  <input type="text" name="digit-2" class="otp">
                </div>
                <div>
                  <input type="text" name="digit-3" class="otp">
                </div>
                <div>
                  <input type="text" name="digit-4" class="otp">
                </div>
                <div>
                  <input type="text" name="digit-5" class="otp">
                </div>
              </div>
              <p class="otp-resend text-center my-4"><a style="color: #F51111; font-weight: 700;" href="">RE SEND OTP?</a></p>
              <div class="otp-btn-container mx-auto my-5">
                <button type="button">Submit</button>
              </div>
            </form>
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
  </main>

@endsection('content')