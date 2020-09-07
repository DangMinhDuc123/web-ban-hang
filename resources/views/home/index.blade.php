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
        <!-- product section end -->
        <!-- latestpost area start -->
        <div class="latest-post-area">
        	<div class="container">
        		<div class="area-title">
        			<h2>Latest Post</h2>
        		</div>
        		<div class="row">
        			<div class="all-singlepost">
        				<!-- single latestpost start -->
        				<div class="col-md-4 col-sm-4 col-xs-12">
        					<div class="single-post">
        						<div class="post-thumb">
        							<a href="#">
        								<img src="img/post/post-1.jpg" alt="" />
        							</a>
        						</div>
        						<div class="post-thumb-info">
        							<div class="post-time">
        								<a href="#">Beauty</a>
        								<span>/</span>
        								<span>Post by</span>
        								<span>BootExperts</span>
        							</div>
        							<div class="postexcerpt">
        								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas...</p>
        								<a href="#" class="read-more">Read more</a>
        							</div>
        						</div>
        					</div>
        				</div>
        				<!-- single latestpost end -->
        				<!-- single latestpost start -->
        				<div class="col-md-4 col-sm-4 col-xs-12">
        					<div class="single-post">
        						<div class="post-thumb">
        							<a href="#">
        								<img src="img/post/post-2.jpg" alt="" />
        							</a>
        						</div>
        						<div class="post-thumb-info">
        							<div class="post-time">
        								<a href="#">Fashion</a>
        								<span>/</span>
        								<span>Post by</span>
        								<span>BootExperts</span>
        							</div>
        							<div class="postexcerpt">
        								<p>Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus...</p>
        								<a href="#" class="read-more">Read more</a>
        							</div>
        						</div>
        					</div>
        				</div>
        				<!-- single latestpost end -->
        				<!-- single latestpost start -->
        				<div class="col-md-4 col-sm-4 col-xs-12">
        					<div class="single-post">
        						<div class="post-thumb">
        							<a href="#">
        								<img src="img/post/post-3.jpg" alt="" />
        							</a>
        						</div>
        						<div class="post-thumb-info">
        							<div class="post-time">
        								<a href="#">Brunch Network</a>
        								<span>/</span>
        								<span>Post by</span>
        								<span>BootExperts</span>
        							</div>
        							<div class="postexcerpt">
        								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
        								<a href="#" class="read-more">Read more</a>
        							</div>
        						</div>
        					</div>
        				</div>
        				<!-- single latestpost end -->
        			</div>
        		</div>
        	</div>
        </div>
        <!-- latestpost area end -->
        <!-- block category area start -->
        <div class="block-category">
        	<div class="container">
        		<div class="row">
        			<!-- featured block start -->
        			<div class="col-md-4">
        				<!-- block title start -->
        				<div class="block-title">
        					<h2>Featureds</h2>
        				</div>
        				<!-- block title end -->
        				<!-- block carousel start -->
        				<div class="block-carousel">
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-1.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec ac tempus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-2.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Primis in faucibus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$205.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Voluptas nulla</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Cras neque metus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Accumsan elit</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$165.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Pellentesque habitant</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec non est</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$560.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        				</div>
        				<!-- block carousel end -->
        			</div>
        			<!-- featured block end -->
        			<!-- featured block start -->
        			<div class="col-md-4">
        				<!-- block title start -->
        				<div class="block-title">
        					<h2>On Sales</h2>
        				</div>
        				<!-- block title end -->
        				<!-- block carousel start -->
        				<div class="block-carousel">
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Voluptas nulla</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-10.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Cras neque metus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec ac tempus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Primis in faucibus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$205.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Accumsan elit</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$165.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Pellentesque habitant</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec non est</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$560.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        				</div>
        				<!-- block carousel end -->
        			</div>
        			<!-- featured block end -->
        			<!-- featured block start -->
        			<div class="col-md-4">
        				<!-- block title start -->
        				<div class="block-title">
        					<h2>Populers</h2>
        				</div>
        				<!-- block title end -->
        				<!-- block carousel start -->
        				<div class="block-carousel">
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Voluptas nulla</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Cras neque metus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec ac tempus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Primis in faucibus</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$205.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Accumsan elit</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$165.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        					<div class="block-content">
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Pellentesque habitant</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        						<!-- single block start -->
        						<div class="single-block">
        							<div class="block-image pull-left">
        								<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
        							</div>
        							<div class="category-info">
        								<h3><a href="product-details.html">Donec non est</a></h3>
        								<p>Nunc facilisis sagittis ullamcorper...</p>
        								<div class="cat-price">$560.00</div>
        								<div class="cat-rating">
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        									<a href="#"><i class="fa fa-star"></i></a>
        								</div>								
        							</div>
        						</div>
        						<!-- single block end -->
        					</div>
        				</div>
        				<!-- block carousel end -->
        			</div>
        			<!-- featured block end -->
        		</div>
        	</div>
        </div>
        <!-- block category area end -->
        <!-- testimonial area start -->
        <div class="testimonial-area lap-ruffel">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="crusial-carousel">
        					<div class="crusial-content">
        						<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
        						<span>BootExperts</span>
        					</div>
        					<div class="crusial-content">
        						<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
        						<span>Lavoro Store!</span>
        					</div>
        					<div class="crusial-content">
        						<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
        						<span>MR Selim Rana</span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- testimonial area end -->
        <!-- Brand Logo Area Start -->
        <div class="brand-area">
        	<div class="container">
        		<div class="row">
        			<div class="brand-carousel">
        				<div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
        				<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- Brand Logo Area End -->
        <!-- FOOTER START -->
        @stop