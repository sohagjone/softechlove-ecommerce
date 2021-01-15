@extends('layouts.frontend_master')
@section('title')
Home
@endsection
@section('content')
<!-- Carosel Area start-->
 <section class="carousel-section pb-5">
        <div class="container">
            <div class="slider-active">
                <div class="slider-single-item">
                    <img src="{{asset('frontend')}}/img/slider-img2.jpg" class="img-fluid" alt="no image">
                    <div class="slider-text">
                        <h2>Cherner <span>Armchair</span></h2>
                        <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
                        <a href="#">View now</a>
                    </div>
                </div>
                <div class="slider-single-item">
                    <img src="{{asset('frontend')}}/img/slider-img2.jpg"  class="img-fluid" alt="">
                    <div class="slider-text">
                        <h2>Cherner <span>Armchair</span></h2>
                        <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
                        <a href="#">View now</a>
                    </div>
                </div>
                <div class="slider-single-item">
                    <img src="{{asset('frontend')}}/img/slider-img3.jpg" class="img-fluid" alt="">
                    <div class="slider-text">
                        <h2>Cherner <span>Armchair</span></h2>
                        <p>The 1958 moulded plywood armchair by Norman Cherner.</p>
                        <a href="#">View now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Carosel Area end-->

<!-- Letest product area -->
<section>
        <div class="container">
            <div class="row">
                <div class="col-12"><h3>Latest Product</h3></div>
            </div>
            <div class="row">
                <!--Single product start-->
                 @foreach($latest_products as $latest_product)
                <div class="col-md-3">
                     <div class="product-wrapper">
                                        <div class="product-img">
                        <a href="#"> 
                <img src="{{asset('uploads')}}/{{$latest_product->product_image}}"></a>
            <a href="{{route('product_details', ['id'=>$latest_product->id])}}"> <img class="secondary-img" src="{{asset('frontend')}}/img/product-img/product1.jpg"
                                                    alt=""></a>
                                            <div class="product-action">
                                                <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="far fa-eye"></i></a>
                                                <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="fas fa-balance-scale"></i></a>
                                                <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                        <h3><a href="{{route('product_details', ['id'=>$latest_product->id])}}">"{{$latest_product->product_name}}"</a></h3>
                                            <div class="rating">
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span>"{{$latest_product->product_price}}"</span>
                                                <span><del>$239.9</del></span>
                                            </div>
                                            <div class="cart-btn">
                                             <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><span>Add to Cart</span></a>  
                                            </div>
                                            <div class="cart-btn">
                                              <form action="{{route('add_to_cart')}}" method="POST" class="cart-and-action">
                                                @csrf
                                                        <div class="">

                                        <div class="float-left">
                                    
                                    <input type="hidden" name="product_quantity" value="1">
                                        <input type="hidden" name="product_id" value="{{$latest_product->id}}">
                                            </div>
                                        </div>
                                        <div class="cart-pro">
                                       <button class="btn btn-outline-dark btn-lg" type="submit">Add to cart</button>
                                                </div>
                                            </form>
                                             </div>
                                        </div>
                                    </div>
                                </div>
             <!--Single product End-->
                        @endforeach 
                      </div>
                 </div>

    </section>
<!--Product Area-->
<section class="product-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="product-tab cat_product">
                    <ul class="nav" role="tablist">
                        <li class="nav-item  pb-5">
<a class="nav-link active"  data-toggle="tab" href="#allProducts" role="tab">All Products</a>
                        </li>
                        @foreach ($all_categories as $all_category)
                        <li class="nav-item pb-5">
                         <a class="nav-link" data-toggle="tab" href="#tab{{$all_category->id}}"
                         role="tab">{{$all_category->category_name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
<div class="tab-pane fade show active" id="tab{{$all_category->id}}" role="tabpanel" aria-labelledby="11">
                        <div class="product-active owl-carousel nav-style">
                                @foreach($all_products as $all_product)
                                        <!--Single product Start-->
                                        <div class="product-wrapper">
                                            <div class="product-img">

     <a href="{{route('product_details', ['id'=>$all_product->id])}}"> 
    <img src="{{asset('uploads')}}/{{$all_product->product_image}}"></a>
                                            <div class="product-action">
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="far fa-eye"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-balance-scale"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                            <h3><a href="{{route('product_details', ['id'=>$all_product->id])}}" >{{$all_product->product_name}}</a></h3>
                                                <div class="rating">
                                                    <i class="fas far fa-star"></i>
                                                    <i class="fas far fa-star"></i>
                                                    <i class="fas far fa-star"></i>
                                                    <i class="fas far fa-star"></i>
                                                    <i class="fas far fa-star"></i>
                                                </div>
                                                <div class="price">
                                                    <span>${{$all_product->product_price}} </span>
                                                    <span><del>$239.9</del></span>
                                                </div>
                                         
                                <div class="cart-btn">
                                      <form action="{{route('add_to_cart')}}" method="POST" class="cart-and-action">
                                                @csrf
                                                        <div class="">

                                        <div class="float-left">
                                    
                                    <input type="hidden" name="product_quantity" value="1">
                                        <input type="hidden" name="product_id" value="{{$all_product->id}}">
                                            </div>
                                        </div>
                                        <div class="cart-pro">
                                       <button class="btn btn-outline-dark btn-lg" type="submit">Add to cart</button>
                                                </div>
                                            </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single product End-->
                                        @endforeach
                                    </div>
                                </div>
                        @foreach ($all_categories as $all_category)
                        <div class="tab-pane fade" id="tab{{$all_category->id}}" role="tabpanel" aria-labelledby="11">
                            <div class="product-active owl-carousel nav-style">
                                @foreach ($all_products as $all_product)
                                <!--Single product Start-->
                @if($all_category->id ==$all_product->category_id)
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#"> <img src="{{asset("uploads/$latest_product->product_image")}}"></a>
                                        <div class="product-action">
                                            <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="far fa-eye"></i></a>
                                            <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="fas fa-balance-scale"></i></a>
                                            <a href="{{route('product_details', ['id'=>$latest_product->id])}}"><i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <h3><a href="{{route('product_details', ['id'=>$latest_product->id])}}">{{$all_product->product_name}}</a></h3>
                                        <div class="rating">
                                            <i class="fas far fa-star"></i>
                                            <i class="fas far fa-star"></i>
                                            <i class="fas far fa-star"></i>
                                            <i class="fas far fa-star"></i>
                                            <i class="fas far fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span>{{$all_product->product_price}} </span>
                                            <span><del>$239.9</del></span>
                                        </div>
                                        <div class="cart-btn">
                                                      <form action="{{route('add_to_cart')}}" method="POST" class="cart-and-action">
                                                @csrf
                                                        <div class="">

                                        <div class="float-left">
                                    
                                    <input type="hidden" name="product_quantity" value="1">
                                        <input type="hidden" name="product_id" value="{{$all_product->id}}">
                                            </div>
                                        </div>
                                        <div class="cart-pro">
                                       <button class="btn btn-outline-dark btn-lg" type="submit">Add to cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Single product End-->
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product End Area-->

<!--Banner Area-->
<div class="banner-area pb-5">
    <div class="container">
        <div class="banner-img">
            <a href="#"><img class="img-fluid" src="img/banner-img/banner.jpg" alt=""></a>
        </div>
    </div>
</div>
</div>
    </div>
        </div>
            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subcribe-section start-->
<section class="subscribe-section">
    <div class="container">
        <div class="subscribe text-center py-5">
            <div class="rwo py-5">
                <div class="col-12 ">
                    <h2>KEEP UPDATED</h2>
                    <p>Sign up for our newletter to recevie updates an exlusive offers</p>
                </div>
                <div class="col-12 ">
                    <div class="input-group w-50  mx-auto pt-4">
                        <input type="text" placeholder="Enter Your Email" aria-label="Recipient's "
                            aria-describedby="my-addon">
                        <div class="input-group-append">
                            <span class="subscribe-text" id="my-addon">Subscribe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subcribe-section End-->
<!--Brand-section start-->
    <div class="brand-section">
        <div class="container ">
            <div class="row">
                <div class="brand-active owl-carousel ">
                    <div class="single-brand"><a href=""><img src="{{asset('frontend')}}/img/brand/brand1.jpg" alt="" class=""></a></div>
                    <div class="single-brand"><a href=""><img src="{{asset('frontend')}}/img/brand/brand1.jpg" alt="" class=""></a></div>
                    <div class="single-brand"><a href=""><img src="{{asset('frontend')}}/img/brand/brand1.jpg" alt="" class=""></a></div>
                    <div class="single-brand"><a href=""><img src="{{asset('frontend')}}/img/brand/brand1.jpg" alt="" class=""></a></div>
                    <div class="single-brand"><a href=""><img src="{{asset('frontend')}}/img/brand/brand1.jpg" alt="" class=""></a></div>
                </div>
            </div>
        </div>
    </div>
<!--Brand-section End-->
@endsection








    