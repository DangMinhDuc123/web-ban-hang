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
						<li class="category3"><span>Shopping Cart</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="our-product-area new-product">
	<div class="container">
		<div class="area-title">
			<h2>Giỏ Hàng</h2>
		</div>
		<div class="cart-area-start">
			<div class="container">
				<!-- Shopping Cart Table -->
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="cart-table">
								<thead>
									<tr>
										<th>STT</th>
										<th>Product</th>
										<th>Product name</th>

										<th>Unit Price</th>
										<th>Qty</th>
										<th>Subtotal</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1 ?>
									@if(isset($product))
									@foreach($product as $key=>$pro)
									<tr>
										<td style="width: 10px">{{ $i }}</td>
										<td>
											<a href="#"><img src="{{ pare_url_file($pro->options->avatar) }}" class="img-responsive" alt=""></a>
										</td>
										<td>
											<h6>{{ $pro->name }}</h6>
										</td>

										<td>
											<div class="cart-price js-total-item">{{ number_format($pro->price) }}$</div>
										</td>
										<td>
											<div class="qty_number" >
												<input type="number" min="1"  class="input_quantity" value="{{ $pro->qty }}" id="" >
												<p data-price="{{ $pro->price }}" class="fixupdate" data-url="{{ route('ajax.get.update.cart',$key) }}" data-id-product="{{ $pro->id }}">
													<button class="js-increase" style="margin-top: -30px;
													margin-left: 50px;
													position: absolute;
													padding-top: 20p;">+</button>
													<button style="position: absolute;
													margin-left: -70px;
													margin-top: -30px;" class="js-reduction">-</button>
												</p>
											</div>
											

											{{-- <a href="{{ route('ajax.get.update.cart',$key) }}" data-id-product="{{ $pro->id }}" class="js-update-item" data-id={{ $key }} >Cap nhat</a> --}}

										</td>
										<td>
											<span  class="cart-subtotal js-total-item">{{ number_format($pro->qty * $pro->price) }}$</span>
										</td>
										<td><a href="{{ route('get.delete.cart',$key) }}"><i class="fa fa-times"></i></a></td>
									</tr>
									<?php $i++ ?>
									@endforeach
									@endif
									<tr>
										<td class="actions-crt" colspan="7">
											<div class="">
												<div class="col-md-4 col-sm-4 col-xs-4 align-left"><a class="cbtn" href="{{ route('home') }}">Continue Shopping</a></div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Shopping Cart Table -->
				<!-- Shopping Coupon -->
				<div class="row">
					<div class="col-md-12 vendee-clue">
						<div class="shipping coupon cart-totals" style="float: right;">
							<ul>
								<li class="cartSubT">Tổng sản phẩm:    <span>{{ \Cart::count() }}</span></li>
								<li class="cartSubT">Tổng tiền thanh toán:    <span id="sub-total" >{{\Cart::subtotal() }}$</span></li>
							</ul>
							<a class="proceedbtn" href="{{ route('get.form.pay') }}">PROCEED TO CHECK OUT</a>
							
						</div>
						<!-- Shopping Totals -->
					</div>
				</div>
				<!-- Shopping Coupon -->
			</div>	
		</div>
	</div>
</div>
@stop

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(function(){
		$(".js-update-item").click(function(event){
			event.preventDefault();
			let $this = $(this);
			let url = $this.attr('href');
			let qty  = $this.prev().val();
			let idProduct = $this.attr('data-id-product');
			
			if(url) {
				$.ajax({
					url: url,
					data: { 
						qty: qty,
						idProduct :idProduct  
					}
				}).done(function( results ) {
					alert(results.messages);
					window.location.reload();
				});
			}
		})
	})


	$(".js-increase").click(function(event){
		event.preventDefault();
		let $this = $(this);
		let $input  = $this.parent().prev();
		let number = parseInt($input.val());
		if(number >= 10){
			// toastr.warning(" mua toi da 10sp/1 lan mua");
			return false;
		}
		let price = $this.parent().attr('data-price');
		let URL = $this.parent().attr('data-url');
		let productID = $this.parent().attr('data-id-product');
		
		number = number + 1;
		
		

		$.ajax({
			url: URL,
			data: { 
				qty: number,
				idProduct: productID
			}
		}).done(function( results ) {
			if (typeof results.totalMoney !== "undefined") {
				$input.val(number);
				$("#sub-total").text(results.totalMoney + "$");
				$this.parents('tr').find(".js-total-item").text(results.totalMoneyItem + "$");
			}else{
				$input.val(number - 1);
			}
			console.log(results);
		});
	})

	$(".js-reduction").click(function(event){
		event.preventDefault();
		let $this = $(this);
		let $input  = $this.parent().prev();
		let number = parseInt($input.val());
		if(number <= 1){
			// toastr.warning(" mua toi da 10sp/1 lan mua");
			return false;
		}
		let price = $this.parent().attr('data-price');
		let URL = $this.parent().attr('data-url');
		let productID = $this.parent().attr('data-id-product');
		
		number = number - 1;
		
		$this.parents('tr').find(".js-total-item").text(price * number);

		$.ajax({
			url: URL,
			data: { 
				qty: number,
				idProduct: productID
			}
		}).done(function( results ) {
			if (typeof results.totalMoney !== "undefined") {
				$input.val(number);
				$("#sub-total").text(results.totalMoney + "$");
				$this.parents('tr').find(".js-total-item").text(results.totalMoneyItem + "$");
			}else{
				$input.val(number + 1);
			}
			console.log(results);
		});
	})
</script>
@stop