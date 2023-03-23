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
                        <h5 class="text-center text-dark mb-3 customize-font mt-5"><b>SIGN INTO YOUR ACCOUNT</b></h5>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="col-12 mb-4">
                                <div class="form-outline">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-outline">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="password">Password</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="col-auto mt-3 d-flex">
                                <button type="submit" class="btn button-color me-5 mb-3">SIGN IN</button>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif<br>
                                <span class="login-span"><b>OR</b></span>

                            </div>
                        </form>
                    </div>
                    <div class="d-flex my-3">
                        <div class="me-2"> <a href="{{url('login/linkin')}}"><img src="bundles/images/lit-icons/linkin-icon.png" class="w-100"
                                    alt=""></a>
                        </div>
                        <div class="me-2"><a href="{{url('login/google')}}"><img src="bundles/images/lit-icons/google-icon.png"
                                class="w-100" alt=""> </a></div>
                        <div><a href="{{url('/facebook/redirect')}}"><img src="bundles/images/lit-icons/facebook-icon.png" class="w-100 "
                                alt=""></a></div>
                    </div>
                    <div class="mt-5">
                        <div class="card" style="width: 100%; min-height: 120px; background-color: #EBF5FA;">
                            <div class="card-body">
                                <h5 class="card-title"><b><a class="text-dark" href="">Create your Account?</a></b></h5>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a> -->
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
    </main>

@endsection('content')