@extends('layouts/frontend_master')
@section('title')
Shop page
@endsection
@section('content')
<div class="page-tile-area py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title area start -->
    <div class="shop-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- widget with Number start -->
                    <div class="widget-area ">
              			@include('frontend/includes/shop_widget')
                    <!-- widget Number End  -->

                </div> <!-- Col-3  end-->
                <div class="col-lg-9">
                    <!-- Banner area start  -->
                    <div class="banner-area">
                        <img src="img/banner-img/banner2.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- Banner area  End-->
                   <div class="shop-layout-area py-5">
                        <div class="shop-layout-bar clearfix ">
                            <ul class="nav shop-tap" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#grid-view" role="tab">
                                        <i class="fas fa-th-large"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#list-view" role="tab">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="filter-section">
                                <select name="" id="">
                                    <option value="#">Default short</option>
                                    <option value="#">Default short</option>
                                    <option value="#">Default short</option>
                                    <option value="#">Default short</option>
                                    <option value="#">Default short</option>
                                </select>
                            </div>
                            <div class="showing-result">
                                <span>Showing 1-12 of 30 relults</span>
                            </div>

                        </div>
                        <!-- tab content-->
                        <div class="tab-content pt-4">
                            <!-- tab grid content-->
                            <div class="tab-pane fade" id="grid-view" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--Single product start-->
                              @foreach($all_products as $all_product)
                                       <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <span>hot</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-content-list">
                                            <h3>Water Repellent Parka</h3>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout.</p>
                                            <div class="rating-list">
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <span>3 Reating(s) | Add Your Reating(s)</span>
                                            </div>
                                            <div class="price-list">
                                                <span>$ 229.9 </span>
                                            </div>
                                            <div class="cart-and-action">
                                                <div class="cart-btn-list">
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
                                                <div class="product-action-list">
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="far fa-eye"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-balance-scale"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                        <!--Single product End-->
                                    </div>
                                </div>
                            </div>
                            <!-- tab list content-->
                            <div class="tab-pane fade active show " id="list-view" role="tabpanel">
                                <!--Single product start-->
                                @foreach($all_products as $all_product)
                                <div class="row pb-4">
                                    <div class="col-md-4">
                                        <div class="product-wrapper">
                                   <div class="product-img">
                                 <a href="{{route('product_details', ['id'=>$all_product->id])}}"> 
                                 <img src="{{asset('uploads')}}/{{$all_product->product_image}}" alt=""></a>
                                                <span>hot</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-content-list">
                                            <h3>{{$all_product->product_name}}</h3>
                                            <p>{{$all_product->product_short_description}}</p>
                                            <div class="rating-list">
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <i class="fas far fa-star"></i>
                                                <span>3 Reating(s) | Add Your Reating(s)</span>
                                            </div>
                                            <div class="price-list">
                                                <span>$ {{$all_product->product_price}}</span>
                                            </div>
                                            <div class="cart-and-action">
                                                <div class="cart-btn-list">
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
                                                <div class="product-action-list">
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="far fa-eye"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-balance-scale"></i></a>
                                                    <a href="{{route('product_details', ['id'=>$all_product->id])}}"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!--Single product End-->
                                {{$all_products->links()}}
                            </div>
                        </div>
                    </div>
                    <!-- List view and grid view tab End-->
                </div>
            </div>
        </div>
    </div>

@endsection

