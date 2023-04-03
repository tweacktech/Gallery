@extends('layouts.header')

@section('content')
 

    <main>
        <div class=" container-fluid mb-5 mx-0 main-body">
            <div class="row">
                <div class="col-md-7 ms-n5">
                    <!-- <div class="container"> -->
                    <img src="{{url('bundles/images/landing/blog-pics2.png')}}" class="h-0 w-100" alt="">
                </div>
                <!-- </div> -->
                <div class="container px-5 col-md-5">
                    <div>
                        <h5 class="text-center text-dark mb-3 customize-font mt-5"><b>{{ __('Enter OTP send to your Email') }}</b></h5>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                     <form method="POST" action="{{url('otp_verify')}}">
                        @csrf            
                            <div class="col-12 mb-4">
                                <div class="form-outline">
                                     <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus>
                                      @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="otp"></label>
                                </div>
                            </div>
                         <div class="col-auto mt-3 d-flex">
                                <button type="submit" class="btn button-color me-5 mb-3"> {{ __('Activate') }}</button>
                            </div>
                    </form>
                </div>
                    </div>
                    
                   
                </div>

            </div>
     
        </div>
      </div>
    </main>

@endsection('content')