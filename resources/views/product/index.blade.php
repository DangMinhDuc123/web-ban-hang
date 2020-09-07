@extends('layouts.app')
@section('content')
<style>
.sidebar-content .active{
    color: #c2a476;
}
</style>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="{{ route('home') }}">Trang Chủ</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>{{ $cateProduct->c_name }}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs area end -->
<!-- shop-with-sidebar Start -->
<div class="shop-with-sidebar">
	<div class="container">
		<div class="row">
			<!-- left sidebar start -->
			<div class="col-md-3 col-sm-12 col-xs-12 text-left">
				<div class="topbar-left">
					<aside class="widge-topbar">
						<div class="bar-title">
							<div class="bar-ping"><img src="{{ asset('img/bar-ping.png') }}" alt=""></div>
							<h2>Shop by</h2>
						</div>
					</aside>
					<aside class="sidebar-content">
						<div class="sidebar-title">
							<h6>Khoảng giá</h6>
						</div>
						<ul class="sidebar-tags">
							<li><a class="{{ Request::get('price') == 1 ? 'active' : '' }}"  href="{{ request()->fullUrlWithQuery(['price' => '1']) }}">dưới 1.000.000</a></li>
							<li><a class="{{ Request::get('price') == 2 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '2']) }}">1.000.000 - 3.000.000</a></li>
							<li><a class="{{ Request::get('price') == 3 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '3']) }}">3.000.000 - 5.000.000</a></li>
							<li><a class="{{ Request::get('price') == 4 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '4']) }}">5.000.000 - 7.000.000</a></li>
							<li><a class="{{ Request::get('price') == 5 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '5']) }}"> Trên 7.000.000</a></li>
						</ul>
					</aside>
					

				</div>
			</div>
			<!-- left sidebar end -->
			<!-- right sidebar start -->
			<div class="col-md-9 col-sm-12 col-xs-12">
				<!-- shop toolbar start -->
				<div class="shop-content-area">
					<div class="shop-toolbar">
						<div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
							<form class="tree-most" id="form_order" method="get" action="">
								<div class="orderby-wrapper">
									<label>Sắp Xếp</label>
									<select name="orderby" class="orderby">
										<option {{ Request::get('orderby') == "md" || !Request::get('orderby') ? "selected ='selected'" : "" }} selected="selected" value="md"> Mặc Định</option>
										<option {{ Request::get('orderby') == "desc" ? "selected ='selected'" : "" }} value="desc">Sản phẩm mới</option>
										<option {{ Request::get('orderby') == "asc" ? "selected ='selected'" : "" }} value="asc">Sản phẩm cũ</option>
										<option {{ Request::get('orderby') == "price_max" ? "selected ='selected'" : "" }} value="price_max">Gía tăng dần</option>
										<option {{ Request::get('orderby') == "price_min" ? "selected ='selected'" : "" }} value="price_min">Gía giảm dần</option>
									</select>
								</div>
							</form>
						</div>


					</div>
				</div>
				<!-- shop toolbar end -->
				<!-- product-row start -->
				<div class="tab-content">
					<div class="tab-pane fade in active" id="shop-grid-tab">
						<div class="row">
							<div class="shop-product-tab first-sale">
								@foreach($products as $cateP)
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="two-product">
										<!-- single-product start -->
										<div class="single-product">

											<div class="product-img">
												@if( $cateP->pro_number == 0)
												<span style="position: absolute;background:#f28902;padding: 5px 10px;border-radius: 5px;font-size: 11px;color: #fff;font-weight: 600">Tạm hết hàng</span>
												@endif
												<a href="{{ route('get.detail.product',[$cateP->pro_slug,$cateP->id]) }}">
													<img class="primary-image" src="{{ pare_url_file($cateP->pro_avatar) }}" alt="" />
													<img class="secondary-image" src="{{ pare_url_file($cateP->pro_avatar) }}" alt="" />
												</a>

												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-links">

															<div class="compare-button">
																<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
															</div>									
														</div>

													</div>
												</div>
												<div class="price-box">
													<span class="new-price">{{ $cateP->pro_price,0,',','.' }}</span>

												</div>
												@if($cateP->pro_sale)
												<label class="discount" style="background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);
												border-radius: 10px;
												padding: 1px 7px;
												padding-left: 0;
												padding-right: 10px;color: #fff;
												font-weight: 600;font-size: 11px;
												">GIẢM {{ $cateP->pro_sale }}</label>
												@endif
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="{{ route('get.detail.product',[$cateP->pro_slug,$cateP->id]) }}">{{ $cateP->pro_name }}</a></h2>

											</div>
										</div>
										<!-- single-product end -->
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!-- product-row end -->
						<!-- product-row start -->

					</div>
					<!-- list view -->

					<!-- shop toolbar start -->

					<!-- shop toolbar end -->
				</div>
			</div>
			<!-- right sidebar end -->
		</div>
	</div>
</div>
<!-- shop-with-sidebar end -->
<!-- Brand Logo Area Start -->

@stop

@section('script')
<script>
	$(function(){
		$('.orderby').change(function(){
			$("#form_order").submit();
		});
	});
</script>
@stop