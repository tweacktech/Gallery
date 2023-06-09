@extends('layouts.header')

@section('content')
 

  <main>
         <section>
            <div class="container-fluid mt-n2 d-flex" style=" align-items: center; background-color: #00659D; min-height: 2rem; color: white;">
                <div class="container">
                    
                </div>
            </div>
        </section>
    <section class="adjust">

              <div style="font-size: 0.9rem; color: black;" class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-container">
                                <div>
                                    <img class="img-fluid" src="/products/{{$products->image}}" alt="">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="sub-product"><img src="/products/{{$products->image}}" class="img-fluid" alt=""
                                        srcset=""></div>
                                <div class="mx-2 sub-product"><img src="/products/{{$products->image}}" class="img-fluid" alt=""
                                        srcset=""></div>
                                <div class="sub-product"><img src="/products/{{$products->image}}" class="img-fluid" alt=""
                                        srcset=""></div>
                            </div>
                        </div>
                        <div class=" ps-4 col-md-6">
                            <div class="d-flex">
                                <div class="">
                                    <button type="submit" class="btn button-colors px-5 me-2 mb-3"><b>NEW</b></button>
                                </div>
                                <div class="">
                                    <button style="background-color: #53A451;" type="submit"
                                        class="btn button-colors me-2 mb-3"><b>FEATURED</b></button>
                                </div>
                                <div class="">
                                    <button style="background-color: #B91D24;" type="submit"
                                        class="btn button-colors mb-3"><b>SALES</b></button>
                                </div>
                            </div>
                            <div class="">
                                <div class="my-3">
                                    <h3 style="color: black; font-size: 2.5em; white-space: nowrap;" class="fw-bolder">
                                        {{$products->name}}</h3>
                                     <h6 style="color: #00659D;" class="fw-bolder mt-3">NGN {{$products->price}}</h6>

                                </div>
                                <div>
                                    <img src="bundles/images/lit-icons/regular-star.png" alt="">
                                    <img src="bundles/images/lit-icons/regular-star.png" alt="">
                                    <img src="bundles/images/lit-icons/regular-star.png" alt="">
                                    <img src="bundles/images/lit-icons/regular-star.png" alt="">
                                    <img src="bundles/images/lit-icons/solid-star.png" alt="">
                                </div>
                                <div style="font-size: 1rem; color: black;">
                                    <h6><b>Product ID</b>: 1004</h6>
                                    <h6><b>Catergory</b>: Rings</h6>
                                    <h6><b>Available</b>: Instock</h6>
                                </div>
                                <div class="d-flex mb-5">
                                    <div class="me-5">
                                        <label for="ageGroup"><b>Age Group</b></label>
                                        <select class="form-select" id="ageGroup" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">6+Months</option>
                                            <option value="2">18+Months</option>
                                        </select>
                                    </div>
                                    <div class="ms-5">
                                        <p><b>Color</b>: silver</p>
                                        <div class="colors">
                                          <a href="">  <div class="yellow me-1"></div></a>
                                          <a href="">  <div class="pinkish me-1 me-1"></div></a>
                                          <a href="">  <div class="brownish me-1"></div></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                     <div class="d-flex me-4">
                                        
                        <form method="POST" action="{{url('wishlist')}}">
                          @csrf
                          <input type="text" hidden name="product_id" value="{{$products->id}}">
                                                
                        <button type="submit" style="width: 150px; height: 52px; background-color: #EAECEF;"
                                            class="d-flex justify-content-center align-items-center">
                            Add to wishlist
                        </button>
                        </form>
                       
                      </div>
                                   
                                    <div class="cart-btn">
                                         <form method="POST" action="{{url('cart')}}">
                          @csrf
                          <input type="text" hidden name="product_id" value="{{$products->id}}">
                                                
                        <button type="submit">
                          Add to Cart
                        </button>
                        </form>
                                    </div>
                                </div>
                                <div style="font-size: small;"  class="mt-2">
                                    <div class="d-flex">
                                        <h6 style="color: black;" class="fw-bolder me-3">DESCRIPTION</h6>
                                        <h6 style="color: black;" class="fw-bolder me-3">SPECIFICATION</h6>
                                        <h6 style="color: black;" class="fw-bolder ">DELIVERY & RETURN</h6>
                                    </div>
                                   
                                    <p>{{$products->description}}
                                    </p>
                                    <h5 class="my-3 fs-6"><b>FEATURES AND BENEFITS</b></h5>
                                    <ul>
                                        <li>Suitable from 6 months to a maximum weight of 15kg</li>
                                        <li>Extra padded comfy seat</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>


    </section>
      <section>
            <div class="container-fluid mt-n2 d-flex pt-6" style=" align-items: center; background-color: #00659D; min-height: 2rem; color: white;">
                <div class="container">
                    
                </div>
            </div>
        </section>

  </main>

  <!-- Footer -->
  @endsection