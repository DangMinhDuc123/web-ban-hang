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
<div class="container wrapper">
	<div class="area-title">
			<h2>Thanh Toán</h2>
		</div>
	<div class="row cart-body">
		<form class="form-horizontal" method="POST" action="">
			@csrf
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
				<!--REVIEW ORDER-->
				<div class="panel panel-info">
					<div class="panel-heading">
						Thông Tin Đơn Hàng <div class="pull-right"><small><a class="afix-1" href="#">Sửa Giỏ Hàng</a></small></div>
					</div>
					<div class="panel-body">
						@foreach($products as $product)
						<div class="form-group">
							<div class="col-sm-3 col-xs-3">
								<img class="img-responsive" src="{{ pare_url_file($product->options->avatar) }}" />
							</div>
							<div class="col-sm-6 col-xs-6">
								<div class="col-xs-12">{{ $product->name }}</div>
								<div class="col-xs-12"><small>Số Lượng:<span>{{ $product->qty }}</span></small></div>
							</div>
							<div class="col-sm-3 col-xs-3 text-right">
								<h6><span>$</span>{{ $product->price * $product->qty }}</h6>
							</div>
						</div>
						<div class="form-group"><hr /></div>
						@endforeach
						<div class="form-group">
							<div class="col-xs-12">
								<strong>Tổng Sản Phẩm</strong>
								<div class="pull-right"><span></span><span>{{ \Cart::count() }}</span></div>
							</div>
						</div>
						<div class="form-group"><hr /></div>
						<div class="form-group">
							<div class="col-xs-12">
								<strong>Tổng Tiền</strong>
								<div class="pull-right"><span>$</span><span>{{ \Cart::subtotal() }}</span></div>
							</div>
						</div>
					</div>
				</div>
				<!--REVIEW ORDER END-->
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
				<!--SHIPPING METHOD-->
				<div class="panel panel-info">
					<div class="panel-heading">Thông Tin Thanh Toán</div>
					<div class="panel-body">
						<div class="form-group">
							<div class="col-md-12"><strong>Địa Chỉ</strong></div>
							<div class="col-md-12">
								<input type="text" name="address" class="form-control" value="" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12"><strong>Số Điện Thoại</strong></div>
							<div class="col-md-12"><input type="text" name="phone" class="form-control" value="{{ get_data_user('web','phone') }}" /></div>
						</div>
						<div class="form-group">
							<div class="col-md-12"><strong>Email</strong></div>
							<div class="col-md-12"><input type="text" name="email" class="form-control" value="{{ get_data_user('web','email') }}" /></div>
						</div>
						<div class="form-group">
							<div class="col-md-12"><strong>Ghi Chú</strong></div>
							<div class="col-md-12"><textarea name="note" id="" rows="5" cols="30" class="form-control"></textarea></div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button type="submit" class="btn btn-success">Xác Nhận</button>
							</div>
						</div>
					</div>
				</div>
				<!--SHIPPING METHOD END-->
				<!--CREDIT CART PAYMENT-->
				
				<!--CREDIT CART PAYMENT END-->
			</div>

		</form>
	</div>
	<div class="row cart-footer">

	</div>
</div>
@stop