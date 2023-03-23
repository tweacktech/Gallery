@extends('layouts.header')

@section('content')
 
     <main>
        <div class=" container-fluid main-body">
            <div class="row">
                <div class="col-md-7 ms-n5">
                    <!-- <div class="container"> -->
                    <img src="{{url('bundles/images/landing/blog-pics2.png')}}" class="h-0 w-100" alt="">
                </div>
                <!-- </div> -->
                <div class="col-md-5 ps-md-5">
                    <div>
                        <h5 class="text-center text-dark my-5"><b>REGISTER A NEW ACCOUNT</b></h5>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('First Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('Last Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="lastName">Last Name</label>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-outline">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-3 mb-3">
                                <div class="form-outline">
                                    <input type="text" id="formControlSm" class="form-control" />
                                    <label class="form-label" readonly for="formControlSm">(+234)</label>
                                </div>
                            </div>
                            <div class="col-9 mb-3">
                                <div class="form-outline">
                                   <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="formControlSm">Telephone</label>
                                </div>
                            </div>
                        </div>
                            <div class="col-12 mb-3">
                                <select name="country" class="form-select selecter form-select mb-3"
                                    aria-label=".form-select-lg example">
                                    <option>Select Country</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Cameroon">Cameroon</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-outline">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="formControlSm">Password</label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-outline">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <label class="form-label" for="formControlSm">Confirm password</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn button-color me-5 mb-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        
      </div>
    </main>

@endsection('content')
 