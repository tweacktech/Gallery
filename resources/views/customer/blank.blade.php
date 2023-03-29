@extends('layouts.header')

@section('content')
 

  <main>
  
    <section class="adjust">

      <div class="row">
         <section class="adjust">

            <div class="container px-16">
                <!-- MAIN PRODUCT DIV -->
                <div style="font-size: 0.9rem; color: black;" class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-container">
                                <div>
                                    <img class="img-fluid" src="{{url('bundles/images/landing/bg-image-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="sub-product"><img src="{{url('bundles/images/landing/bg-image-3.png')}}"
                                        class="img-fluid" alt="" srcset=""></div>
                                <div class="mx-2 sub-product"><img src="{{url('bundles/images/landing/bg-image-3.png')}}"
                                        class="img-fluid" alt="" srcset=""></div>
                                <div class="sub-product"><img src="{{url('bundles/images/landing/bg-image-3.png')}}"
                                        class="img-fluid" alt="" srcset=""></div>
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
                                    <h2 style="color: black; font-size: 2.5em; white-space: nowrap;" class="fw-bolder">
                                        Bright High Chair Multicolor</h2>
                                    <h6 style="color: #00659D;" class="fw-bolder mt-3">NGN 25,000.00</h6>

                                </div>
                                <div>
                                    <img src="{{url('bundles/images/lit-icons/regular-star.png')}}" alt="">
                                    <img src="{{url('bundles/images/lit-icons/regular-star.png')}}" alt="">
                                    <img src="{{url('bundles/images/lit-icons/regular-star.png')}}" alt="">
                                    <img src="{{url('bundles/images/lit-icons/regular-star.png')}}" alt="">
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
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="ms-5">
                                        <p><b>Color</b>: silver</p>
                                        <div class="colors">
                                            <div class="yellow me-1"></div>
                                            <div class="pinkish me-1"></div>
                                            <div class="brownish"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="d-flex me-4">
                                        <div style="width: 150px; height: 52px; background-color: #EAECEF;"
                                            class="d-flex justify-content-center align-items-center">
                                            <span style="font-size: 1.3rem;" class=" fw-bolder">10</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <button
                                                style="padding-top: 0.2rem; padding-bottom: 0.2rem; background-color: #DBDFE3;"
                                                class="d-block border-0">+</button>
                                            <button
                                                style="padding-top: 0.2rem; padding-bottom: 0.2rem; background-color: #DBDFE3;"
                                                class="d-block border-0">-</button>
                                        </div>
                                    </div>
                                    <div class="cart-btn">
                                        <button><b> ADD TO CART</b></button>
                                    </div>
                                </div>
                                <div style="font-size: small;" class="mt-2">
                                    <div class="d-flex">
                                        <h6 style="color: black;" class="fw-bolder me-3">DESCRIPTION</h6>
                                        <h6 style="color: black;" class="fw-bolder me-3">SPECIFICATION</h6>
                                        <h6 style="color: black;" class="fw-bolder ">DELIVERY & RETURN</h6>
                                    </div>
                                    <h5 class="my-3 fs-6"><b>AT A GLANCE</b></h5>
                                    <p>Start your baby's weaning and food journey in bright, colourful style with our
                                        safari-character printed highchair.suitable from six months, this mothercare
                                        highchair boastsa deep padded seat with three recline settings to ensure your
                                        little diner is sitting comfortably. a 5-point harness keeps them secure and a
                                        crotch post prevents them slipping down in the seat.we've given this highchair
                                        six height settings so you can position your baby perfectly for comfortable
                                        feeding or at a table of any height.the tray is removable and easy to pop off
                                        for up-to-table mode so your little one can join .
                                    </p>
                                    <h5 class="my-3 fs-6"><b>FEATURES AND BENEFITS</b></h5>
                                    <ul>
                                        <li>Suitable from 6 months to a maximum weight of 15kg</li>
                                        <li>Extra padded comfy seat</li>
                                        <li>3-position recline</li>
                                        <li>6 height positions</li>
                                        <li>Easy clean removable tray and convenient tray storage</li>
                                        <li>Removable seat for easy cleaning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
      </div>

      <div class="container px-16">

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
    </section>


  </main>

  <!-- Footer -->
  @endsection










@extends('layouts.header')

@section('content')

    <main>
        <section class="slider-container">
            <div class="main-container">
                <div class="main-slider">
                    <div><img src="bundles/images/landing/bg-image.jpg" class="d-block w-100"
                            alt="Sunset Over the City" />
                    </div>
                    <div><img src="bundles/images/landing/bg-image-2.png" class="d-block w-100"
                            alt="Sunset Over the City" />
                    </div>
                    <div><img src="bundles/images/landing/bg-image-3.png" class="d-block w-100"
                            alt="Sunset Over the City" />
                    </div>
                </div>
            </div> 
        </section>
        <section>
            <div class="container-fluid mt-4 d-flex"
                style=" align-items: center; background-color: #ffffff; min-height: 3rem; color: white;">
                <div class="container">
                    <div class="container position-relative">
                        <h6 class="text-dark text-center fs-4">Home/Baby <span class="dark-black">/Bathing &
                                Changeing</span></h6>
                        <div style="right:0; top:-10px; " class="position-absolute">
                            <img src="bundles/images/lit-icons/edit.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-bottom: 5rem; margin-top: 3rem;">
            <div class="container">
          
                <div class="row">
                    <div class="col-4 pe-4">
                        <div style="background-color: #EBF5FA;">
                            <div class="px-3">
                                <p class="dark-black pt-4">
                                    Product type:
                                </p>
                                <div class="input-group border-bottom py-4">
                                   
                                    <div style="min-height: 3rem;" class="input-group mb-3">

                                        <form class="d-flex mt-2 m-auto my-auto mb-3 mb-md-0" method="POST" action="{{url('Search')}}">
                                         @csrf
                                        <button class="btn product-btn btn-outline-secondary" type="submit"
                                            id="button-addon1">
                                            <i class="fas text-dark fa-search"></i>
                                        </button>
                                        <input style="height: 100%;" type="text" class="form-control" placeholder=""
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1" name="search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="type-side-bar py-4">
                                <p class="dark-black ms-4">Category</p>
                                <div class="ms-4">
                                    <div class="border-bottom py-3">
                                        <form>
                                            @foreach($category as $category)
                                            <div class="mb-3 form-check">
                                                <input type="radio" name="bedroomBrand" class="form-check-input"
                                                    id="bedroomBrand">
                                                <label class="form-check-label ms-3" for="bedroomBrand">{{$category->name}} <span class="ms-4"></span></label>
                                            </div>
                                            @endforeach
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            
                                        </form>
                                    </div>
                                    <form>
                                    <div class="py-3 border-bottom">
                                        <p class="dark-black py-3">Color</p>
                                        <div class="d-flex">
                                            <a href="">
                                                <div class="color-picker blue"></div>
                                            </a>
                                            <p class="ps-3">Blue</p>
                                        </div>
                                        <div class="d-flex">
                                            <a href="">
                                                <div class="color-picker green"></div>
                                            </a>
                                            <p class="ps-3">Green</p>
                                        </div>
                                        <div class="d-flex">
                                            <a href="">
                                                <div class="color-picker red"></div>
                                            </a>
                                            <p class="ps-3">Red</p>
                                        </div>
                                        <div class="d-flex">
                                            <a href="">
                                                <div class="color-picker dark-blue"></div>
                                            </a>
                                            <p class="ps-3">Dark blue</p>
                                        </div>
                                    </div>
                                    <div class="py-3 border-bottom">
                                        <p class="dark-black">Age</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sixMonths"
                                                id="sixMonths">
                                            <label class="form-check-label ms-3" for="sixMonths">
                                                6+Months
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eighteenMonths"
                                                id="eighteenMonths">
                                            <label class="form-check-label ms-3" for="eighteenMonths">
                                                18+Months
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="py-4 me-4 bg-light">
                                        <div class="px-4">
                                            <h5 class="dark-black">Filter By</h5>
                                            
                                            <input type="range" class="form-range" id="price" name="price" min="0" max="100" step="1" onchange="updatePriceRange()">

                                                <div id="price-range">0 - 100</div>
                                            <div class="d-grid my-3 gap-2">
                                               
                                                <button class="btn filter-btn" type="button"><b>Filter</b></button>
                                            </div>
                                        
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row">
                           
                           @foreach($products as $product)
                          <div class="col-md-8 col-lg-4" style="margin: 3px; border: 3px solid rgb(243,239,239);">
                                <div class="img-border">
                                    <div class="hovereffect">
                                        <div class="slider-image">
                                          <a href="{{url('details',$product->id)}}">  <img width="30%" src="{{url('bundles/images/landing/bg-image-3.png')}}"
                                                class="d-block w-100" alt="..."></a>
                                        </div>
                                      
                                        <div class="overlay">
                                            <h2>
                                                <div>
                                                    <a href="{{url('details',$product->id)}}" style=" font-size: 10px; padding: 0.4rem;" type="button" class="btn btn-info">Details</a>     
                                                </div>
                                            </h2>
                                            
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h2 class="dept-head-6">{{$product->name}}</h2>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm rating-btn">
                                                    <i class="fa-solid star fa-star"></i> 4.9
                                                </button>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <p>{!!  substr(($product->description),0,20) !!}...</p>
                                        </div>
                                        <div>
                                            <p class="amount"><b>NGN {{$product->price}}</b></p>
                                        </div> 
                                    </div>
                                            <p>
                                            <div class="div">
                                                <div class="d-flex card-icons">
                                                <div>
                                              <form method="POST" action="{{url('wishlist')}}">
                                                @csrf
                                              <input type="text" hidden name="product_id" value="{{$product->id}}">
                                                
                                                 <button type="submit">
                                                            <img src="bundles/images/lit-icons/Vector.png" alt="">
                                                        </button>
                                                    </form>                                                       
                                                    </div>
                                                    <div>




                                                        <form method="POST" action="{{url('cart')}}">
                                              @csrf
                                              <input type="text" hidden name="product_id" value="{{$product->id}}">
                                                
                                                 <button type="submit">
                                                             <img src="bundles/images/lit-icons/icn favorite.png" alt="">
                                                        </button>
                                                    </form>    

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </p>
                                </div>
                            </div>
                            @endforeach
    
                        </div>
                    </div>
 {{$products->links()}}
                </div>
            </div>


        </section>

        <section class="adjust">
            <div class="container px-16">
                <div class="container-fluid my-5">
                    <div class="my-slider">
                        <div><img src="bundles/images/landing/HIPSTER.png" alt=""></div>
                        <div><img src="bundles/images/landing/VONDE.png" alt=""></div>
                        <div><img src="bundles/images/landing/norway.png" alt=""></div>
                        <div><img src="bundles/images/landing/avante.png" alt=""></div>
                        <div><img src="bundles/images/landing/matuska.png" alt=""></div>
                        <div><img src="bundles/images/landing/tylertone.png" alt=""></div>
                        <div><img src="bundles/images/landing/neoquen.png" alt=""></div>
                        <div><img src="bundles/images/landing/orange.png" alt=""></div>
                        <div><img src="bundles/images/landing/HIPSTER.png" alt=""></div>
                        <div><img src="bundles/images/landing/VONDE.png" alt=""></div>
                        <div><img src="bundles/images/landing/norway.png" alt=""></div>
                        <div><img src="bundles/images/landing/avante.png" alt=""></div>
                        <div><img src="bundles/images/landing/matuska.png" alt=""></div>
                        <div><img src="bundles/images/landing/tylertone.png" alt=""></div>
                        <div><img src="bundles/images/landing/neoquen.png" alt=""></div>
                        <div><img src="bundles/images/landing/orange.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>


    </main>
  @endsection

  <script>
function updatePriceRange() {
  var priceInput = document.getElementById("price");
  var priceRange = document.getElementById("price-range");

  priceRange.innerHTML = "0 - " + priceInput.value;
}
</script>