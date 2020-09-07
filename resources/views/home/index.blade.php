@extends('layouts.app')
@section('content')
<body class="home-one">
    <!-- header area end -->
    <!-- start home slider -->
    <div class="slider-area an-1 hm-1">
       <!-- slider -->
       <div class="bend niceties preview-2">
          <div id="ensign-nivoslider" class="slides">	
             <img src="{{ asset('img/iphone.jpg') }}" alt="" title="#slider-direction-1"  />
             <img src="img/slider/home-1/slider1-2.jpg" alt="" title="#slider-direction-2"  />
         </div>
         <!-- direction 1 -->

         <!-- direction 2 -->

     </div>
     <!-- slider end-->
 </div>
 <!-- end home slider -->
 <!-- product section start -->

 <!-- product section end -->
 <!-- banner-area start -->
        {{-- <div class="banner-area">
        	<div class="container-fluid">
        		<div class="row">
        			<a href=""><img src="img/banner/banner-1.jpg" alt="" /></a>
        		</div>
        	</div>
        </div> --}}
        <!-- banner-area end -->
        <!-- product section start -->
        <div class="our-product-area new-product">
        	<div class="container">
        		<div class="area-title">
        			<h2>New products</h2>
        		</div>
        		<!-- our-product area start -->
        		<div class="row">
        			<div class="col-md-12">
        				<div class="row">
        					<div class="features-curosel">
        						<!-- single-product start -->
                                @if(isset($productHot))
                                @foreach($productHot as $hot)
                                <div class="col-lg-12 col-md-12">
                                    <div class="single-product first-sale">

                                        <div class="product-img">
                                            @if($hot->pro_number == 0)
                                            <span style="position: absolute;background:#f28902;padding: 5px 10px;border-radius: 5px;font-size: 11px;color: #fff;font-weight: 600">Tạm hết hàng</span>
                                            @endif
                                            <a href="#">
                                                <img class="primary-image" src="{{ pare_url_file($hot->pro_avatar) }}" alt="" />
                                            </a>
                                           
                                            <div class="actions">
                                                <div class="action-buttons">
                                                    <div class="add-to-links">
                                                       
                                                        <div class="compare-button">
                                                            <a href="{{ route('add.shopping.cart',$hot->id) }}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                        </div>                                  
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{ $hot->pro_price }}$</span>
                                            </div>
                                            @if($hot->pro_sale)
                                            <label class="discount" style="background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);
                                            border-radius: 10px;
                                            padding: 1px 7px;
                                            padding-left: 0;
                                            padding-right: 10px;color: #fff;
                                            font-weight: 600;font-size: 11px;
                                            ">GIẢM {{ $hot->pro_sale }}</label>
                                            @endif

                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="#">{{ $hot->pro_name }}</a></h2>

                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                @endif

                                <!-- single-product end -->

                                <!-- single-product start -->
        						{{-- <div class="col-lg-12 col-md-12">
        							<div class="single-product first-sale">
        								<span class="sale-text">Sale</span>
        								<div class="product-img">
        									<a href="#">
        										<img class="primary-image" src="img/products/product-4.jpg" alt="" />
        										<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
        									</a>
        									<div class="action-zoom">
        										<div class="add-to-cart">
        											<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
        										</div>
        									</div>
        									<div class="actions">
        										<div class="action-buttons">
        											<div class="add-to-links">
        												<div class="add-to-wishlist">
        													<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
        												</div>
        												<div class="compare-button">
        													<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
        												</div>									
        											</div>
        											<div class="quickviewbtn">
        												<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
        											</div>
        										</div>
        									</div>
        									<div class="price-box">
        										<span class="new-price">$360.00</span>
        									</div>
        								</div>
        								<div class="product-content">
        									<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
        									<p>Nunc facilisis sagittis ullamcorper...</p>
        								</div>
        							</div>
        						</div> --}}
        						<!-- single-product end -->

        					</div>
        				</div>	
        			</div>
        		</div>
        		<!-- our-product area end -->	
        	</div>
        </div>
   
       
        <!-- Brand Logo Area End -->
        <!-- FOOTER START -->
        @stop