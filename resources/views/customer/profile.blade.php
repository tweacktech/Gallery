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
                                <li><a href="{{url('orders')}}">Orders</a></li>
                                <li><a href="{{url('wishlist')}}"> Wishlist</a></li>
                                <li>Pending Review</li>
                                <li><a href="{{url('profile')}}"> Profile</a></li>
                                <li><a href="{{url('account_manager')}}">Account Manager</li>
                            </ul>
                            <div class="otp-btn-container mx-auto my-5">
                                <button type="button">LOGOUT</button>
                              </div>
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
                            <div class="container-fluid contact-area"><h6>NSIKAK NELSON</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">ADDRESS BOOK</h5>
                            <div class="container-fluid contact-area"><p>24 !.T Igbani Streeet, Jabi Abuja Nigeria</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0 contact-header">GALLERY BEBE</h5>
                            <div class="container-fluid contact-area"><p><b>₦ 75.000.00</b></p>
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
 