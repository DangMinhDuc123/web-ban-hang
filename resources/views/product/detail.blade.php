@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="index.html">Home</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>{{ $productDetail->pro_name }}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-details-area">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="zoomWrapper">
					<div id="img-1" class="zoomWrapper single-zoom">
						<a href="#">
							<div style="height:450px;width:450px;" class="zoomWrapper"><img id="zoom1" src="{{ pare_url_file($productDetail->pro_avatar) }}" data-zoom-image="{{ pare_url_file($productDetail->pro_avatar) }}" alt="big-1" style="position: absolute;"></div>
						</a>
					</div>
					
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="product-list-wrapper">
					<div class="single-product">
						<div class="product-content">
							<h2 class="product-name"><a href="#">{{ $productDetail->pro_name }}</a></h2>
							<div class="rating-price">	
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<div class="price-boxes">
									<span class="new-price">{{ number_format($productDetail->pro_price) }}$</span>
								</div>
							</div>
							<div class="product-desc">
								<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
							</div>
							<p class="availability in-stock">Availability: <span>In stock</span></p>
							<div class="actions-e">
								<div class="action-buttons-single">
									<div class="inputx-content">
										<label for="qty">Quantity:</label>
										<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
									</div>
									<div class="add-to-cart">
										<a href="#">Add to cart</a>
									</div>
									<div class="add-to-links">
										<div class="add-to-wishlist">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
										</div>
										<div class="compare-button">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
										</div>									
									</div>
								</div>
							</div>
							<div class="singl-share">
								<a href="#"><img src="img/single-share.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="single-product-tab">
				<!-- Nav tabs -->
				<ul class="details-tab">
					<li class="active"><a href="#home" data-toggle="tab">Description</a></li>
					<li class=""><a href="#messages" data-toggle="tab"> Review (1)</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<div class="product-tab-content">
							<p>{{ $productDetail->pro_description }}</p>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages">
						<div class="single-post-comments col-md-6 col-md-offset-3">
							<div class="comments-area">
								<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
								<div class="comments-list">
									<ul>
										<li>
											<div class="comments-details">
												<div class="comments-list-img">
													<img src="img/user-1.jpg" alt="">
												</div>
												<div class="comments-content-wrap">
													<span>
														<b><a href="#">Admin - </a></b>
														<span class="post-time">October 6, 2014 at 1:38 am</span>
													</span>
													<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
												</div>
											</div>
										</li>									
									</ul>
								</div>
							</div>
							<div class="comment-respond">
								<h3 class="comment-reply-title">Add a review</h3>
								<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
								<form action="#">
									<div class="row">
										<div class="col-md-12">
											<p>Name *</p>
											<input type="text">
										</div>
										<div class="col-md-12">
											<p>Email *</p>
											<input type="email">
										</div>
										<div class="col-md-12">
											<p>Your Rating</p>
											<div class="pro-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
											</div>
										</div>
										<div class="col-md-12 comment-form-comment">
											<p>Your Review</p>
											<textarea id="message" cols="30" rows="10"></textarea>
											<input type="submit" value="Submit">
										</div>
									</div>
								</form>
							</div>						
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
</div>
<div class="our-product-area new-product">
	<div class="container">
		<div class="area-title">
			<h2>New products</h2>
		</div>
		<!-- our-product area start -->
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="features-curosel owl-carousel owl-theme" style="opacity: 1; display: block;">
						<!-- single-product start -->
						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;"><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-1.jpg" alt="">
										<img class="secondary-image" src="img/products/product-2.jpg" alt="">
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
										<span class="new-price">$200.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-5.jpg" alt="">
										<img class="secondary-image" src="img/products/product-6.jpg" alt="">
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
										<span class="new-price">$300.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-9.jpg" alt="">
										<img class="secondary-image" src="img/products/product-10.jpg" alt="">
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
										<span class="new-price">$270.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>

						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-13.jpg" alt="">
										<img class="secondary-image" src="img/products/product-1.jpg" alt="">
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
										<span class="new-price">$340.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<span class="sale-text">Sale</span>
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-4.jpg" alt="">
										<img class="secondary-image" src="img/products/product-5.jpg" alt="">
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
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-8.jpg" alt="">
										<img class="secondary-image" src="img/products/product-9.jpg" alt="">
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
										<span class="new-price">$400.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-11.jpg" alt="">
										<img class="secondary-image" src="img/products/product-12.jpg" alt="">
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
										<span class="new-price">$280.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 300px;"><div class="col-lg-12 col-md-12">
							<div class="single-product first-sale">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" src="img/products/product-11.jpg" alt="">
										<img class="secondary-image" src="img/products/product-2.jpg" alt="">
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
										<span class="new-price">$222.00</span>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
									<p>Nunc facilisis sagittis ullamcorper...</p>
								</div>
							</div>
						</div></div></div></div>
						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<!-- single-product start -->

						<!-- single-product end -->
						<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
					</div>	
				</div>
			</div>
			<!-- our-product area end -->	
		</div>
	</div>
	@stop