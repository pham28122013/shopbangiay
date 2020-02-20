@extends('products.master')
@section('content')


<div class="main-home">
    <section class="banner">
           <div class="container">
			   <div class="row">
				   <div class="col-lg-12">
				        <img src="{{asset('./images/banner/banner-img.png')}}" alt="">
				   </div>
			   </div>
		   </div>
	</section>
	<!-- End banner Area -->
</div>
<section class="product">
    <!-- single product slide -->
    @if(count($product) >= 1)
    <div class="single-product-slider margin-top-40px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach($product as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <a href="">
                                <img class="img-fluid" src="{{ asset(config('define.product_images_path') .$product->images->first()->url) }}" alt="image">
                            </a>		
                            <div class="product-details">
                                <a href=""><h6 class="name-product">{{$product->name}}</h6></a>
                                <div class="price">
                                <h6>{{$product->price}}</h6>
                                    <h6 class="l-through">$2.100.000</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach                                     
                <!-- end single product -->
            </div>
        </div>
    </div>
    @else
    <div class="single-product-slider margin-top-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                </div> 
                <div class="col-lg-4">
                    <h3>Không có sản phẩm nào thuộc từ khóa <b>{{$search}}</b></h3>
                </div>    
                <div class="col-lg-4">
        
                </div> 
            </div>
        </div>
    </div>
    @endif
</section>
@endsection