@extends('layouts.header')

@section('content')
    <main>
        <div style="margin: 2rem 3rem 4rem 8rem;">
            <div class="row">
                <div class="col-4">
                    <div style="background-color: #EBF5FA; height: 100%;" px-0 container-fluid">
                        <div style="background-color: #00659D;" class="px-0">
                            <h1 style="font-size: 2em; font-weight: bolder;" class=" py-3 text-center text-light">
                                Gallery BEBE Account</h1>
                        </div>
                        <div>
                            <ul class="dashboard-items">
                                <li>
                                <img src="bundles/images/svgs/Order.svg" alt=""> 
                                <a href="{{url('order')}}" class="ms-2">Orders</a>
                                </li>
                                <li><img src="bundles/images/lit-icons/wishlist.png" alt=""> 
                                    <a href="{{url('wishlist')}}" class="ms-2">Wishlist</a></li>
                                <li><img src="bundles/images/lit-icons/reviw.png" alt="">
                                    <span class="ms-2">Pending
                                        Review</span></li>
                                <li><img src="bundles/images/lit-icons/recently-viewed.png" alt=""> <span class="ms-2">Recently Viewed</span></li>
                                <li><img src="bundles/images/lit-icons/user-profile.png" alt="">
                                 <a  href="{{url('profile')}}"  class="ms-2">Profile</a></li>
                                <li><img src="bundles/images/lit-icons/settings.png" alt=""> <a href="{{url('Update')}}" class="ms-2">Account Manager</a></li>
                            <li class="pt-4">
                              <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div style="background-color: #EBF5FA;" class="col-8">
                    <div class="row pb-3">
                        <div style="margin-bottom: 3rem; border-bottom: 1px solid #00659D;">
                            <h3 class="head-3" style="padding-left: 2.5rem;">Update Profile</h3>
                        </div>
                        <div class="col-8">
                            <form class="row mx-4 update-form" action="{{url('update_profile')}}" method="POST">
                                @csrf
                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}" id="first_name"
                                            class="form-control" />
                                        <label class="form-label" for="first_name"> First name</label>
                                    </div>
                                </div>
                                 <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input type="text" name="last_name" id="last_name"
                                            class="form-control" value="{{Auth::user()->last_name}}" />
                                        <label class="form-label" for="last_name">Last name</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input name="email" value="{{Auth::user()->email}}" disabled type="email" id="email" class="form-control" />
                                        <label class="form-label" for="email">Update Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input name="country" value="{{Auth::user()->country}}" type="tel" id="country" class="form-control" />
                                        <label class="form-label" for="country">Country</label>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input name="phone_number"value="{{Auth::user()->phone_number}}" type="tel" id="phone_number" class="form-control" />
                                        <label class="form-label" for="updateNumber">Update Phone No</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input name="address" type="text" id="address"value="{{Auth::user()->address}}"
                                            class="form-control" />
                                        <label class="form-label" for="address">Update Address</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-outline">
                                        <input name="state" value="{{Auth::user()->state}}"  type="text" id="state" class="form-control" />
                                        <label class="form-label" for="state">Update State</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="">
                                        <button type="submit" class="btn button-color px-5 me-3 mb-3">Edit</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn button-color mb-3">Save to Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" src="bundles/images/profile/profile-pics.png" alt="">
                            </div>
                            <div>
                                <h6 class="text-center fw-bold mt-5">Profile Image</h6>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Footer -->
     @endsection('content')