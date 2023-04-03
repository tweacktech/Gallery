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
                   <div class="col-lg-4">
                        <div style="background-color: #EBF5FA;">
                            <div class="">
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
                                                <input type="radio" name="Category" class="form-check-input"
                                                    id="Category">
                                                <label class="form-check-label ms-3" for="Category">{{$category->name}} <span class="ms-4"></span></label>
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
                                        
                                        <div class="form-check">
                                            <p class="dark-black">AgeGroup</p>
                                        <select class="form-select" id="ageGroup" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">6+Months</option>
                                            <option value="2">18+Months</option>
                                        </select>
                                        </div>
                                        <div class="form-check">
                                           
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
                            <div class="col-md-8 col-lg-4">
                                <div class="img-border">
                                    <div class="hovereffect">
                                        <div class="slider-image">
                                            <img src="/products/{{$product->image}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        
                                        <div class="overlay">
                                            <h2>
                                                <div>
                                                    <button style=" font-size: 10px; padding: 0.6rem;" type="button"
                                                        class="btn btn-danger">sales</button>
                                                </div>
                                            </h2>
                                            <p>
                                            <div class="div">
                                                <div class="d-flex card-icons">
                                                    <div>
                                                       <!--  <a href="">
                                                            <img src="bundles/images/lit-icons/Vector.png" alt="">
                                                        </a> -->


                                                      <form method="POST" action="{{url('wishlist')}}">
                                              @csrf
                                              <input type="text" hidden name="product_id" value="{{$product->id}}">
                                                
                                                
                                                 <button type="submit">
                                                             <img src="bundles/images/lit-icons/Vector.png" alt="">
                                                        </button>
                                                    </form> 
                                                    </div>
                                                    <div>
                                                        <a href="">
                                                            <img src="bundles/images/lit-icons/icn favorite.png" alt="">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="{{url('details',$product->id)}}">
                                                            <img src="bundles/images/lit-icons/icon-eye.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="amount"> <a href="{{url('details',$product->id)}}">{{$product->name}}</a></h6>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm rating-btn">
                                                    <i class="fa-solid star fa-star"></i> 4.9
                                                </button>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <p>{!!  substr(($product->description),0,20) !!}....
                                            </p>
                                        </div>
                                        <div>
                                            <p class="amount"><b>NGN {{ $product->price}}</b> </p>
                                            <p class="amount">

                                                      <form method="POST" action="{{url('cart')}}">
                                              @csrf
                                              <input type="text" hidden name="product_id" value="{{$product->id}}">
                                                 <a href="{{url('details',$product->id)}}" style=" font-size: 10px; padding: 0.4rem;" type="button" class="btn btn-info">Details
                                                <img src="bundles/images/lit-icons/icon-eye.png" alt=""></a>
                                                 <button type="submit" class="btn btn-info">
                                                             <img src="bundles/images/lit-icons/icn favorite.png" alt="">
                                                        </button>
                                                    </form>    


                                           </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
    
                        {{$products->links()}}
                           
                            
                        </div>
                    </div>
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