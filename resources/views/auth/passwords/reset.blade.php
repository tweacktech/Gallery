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
                        <h5 class="text-center text-dark mb-3 customize-font mt-5"><b>{{ __('Reset Password') }}</b></h5>
                        
                      <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        

                            <div class="col-12 mb-4">
                                <div class="form-outline">
                                     <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus=""disabled>
                                     <br>
                                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                                </div>
                            </div>


                       <div class="col-12 mb-4">
                                <div class="form-outline">  
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="form-label" for="email"> New Password</label>
                            </div>
                        </div>

                        
                                <div class="col-12 mb-4">
                                <div class="form-outline"> 
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label class="form-label" for="email"> {{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                         <div class="col-auto mt-3 d-flex">
                                <button type="submit" class="btn button-color me-5 mb-3"> {{ __('Reset Password') }}</button>
                            </div>
                    </form>
                <</div>
                    <div class="d-flex my-3">
                        <div class="me-2"> <a href="{{url('login/linkin')}}"><img src="bundles/images/lit-icons/linkin-icon.png" class="w-100"
                                    alt=""></a>
                        </div>
                        <div class="me-2"><a href="{{url('login/google')}}"><img src="bundles/images/lit-icons/google-icon.png"
                                class="w-100" alt=""> </a></div>
                        <div><a href="{{url('login/facebook')}}"><img src="bundles/images/lit-icons/facebook-icon.png" class="w-100 "
                                alt=""></a></div>
                    </div>
                   
                </div>

            </div>
        </div>
       
       </main>

@endsection('content')