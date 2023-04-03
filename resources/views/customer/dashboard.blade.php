@extends('layouts.header')

@section('content')
    <main>
        <div style="margin: 2rem 3rem 4rem 8rem;">
            <div class="row">
                <div class="col-4">
                    <div style="background-color: #EBF5FA; height: 100%;"class=" px-0 container-fluid">
                        <div style="background-color: #00659D;" class="px-0">
                        <h1 style="font-size: 2em; font-weight: bolder;" class=" py-3 text-center text-light">Gallery BEBE Account</h1></div>
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

                                <li><img src="bundles/images/lit-icons/settings.png" alt=""> <a href="{{url('add_wallet')}}" class="ms-2">TOPUP Wallet</a></li>
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
                        <div class="mb-2 border-bottom">
                            <h3 style="padding-top: 1rem">Overview</h3>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">ACCOUNT DETAILS</h5>
                            <div class="container-fluid contact-area"><h6>{{Auth::user()->first_name." ".Auth::user()->last_name}}</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">ADDRESS BOOK</h5>
                            <div class="container-fluid contact-area"><p>{{Auth::user()->last_name}}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">GALLERY BEBE</h5>
                            <div class="container-fluid contact-area"><p><b>NGN{{$wallet}}</b></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">NEWSLETTER PREFERENCES</h5>
                            <div class="container-fluid contact-area"><p>You are currently subscribed to following newsletters:</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
   

@endsection('content')
 