@extends('admin::layouts.master')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
		<li><a href="#">Đơn hàng</a></li>
		<li class="active">Danh sách</li>
	</ol>
</div>
<div class="row">
	<div class="col-sm-12">
		<form class="form-inline" action="" style="margin-bottom: 20px">
			<div class="form-group">
				<input type="text" class="form-control"   placeholder="Tên Sản Phẩm" name="name" value="{{ \Request::get('name') }}">
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<div class="table-responsive">
	<h2>Quản lý đơn hàng</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Tên khách hàng</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Tổng tiền</th>
					<th>Trạng Thái</th>
					<th>Thao Tác</th>
				</tr>
			</thead>
			<tbody>
				@foreach($transactions as $key=>$transaction)
				<tr>
					<td>{{$key+1 }}</td>
					<td>{{ $transaction->name }}</td>
					<td>{{ $transaction->tr_address }}</td>
					<td>{{  $transaction->tr_phone }}</td>
					<td>{{ number_format($transaction->tr_total) }}</td>
					<td>
						@if($transaction->tr_status == 1)
						<a href="{{ route('admin.get.active.order',$transaction->id) }}" class="label label-success">Đã Xử Lý</a>
						@else
						<a href="{{ route('admin.get.active.order',$transaction->id) }}" class="label label-danger">Đang Xử Lý</a>
						@endif
					</td>
					<td>
						<a style="padding: 7px; border: 1px solid #999; font-size: 12px" href="{{ route('admin.get.view.order', $transaction->id) }}" class="js_order_item" data-id="{{ $transaction->id }}" ><i class="fa fa-pencil">Xem</i></a>
						<a style="padding: 7px; border: 1px solid #999; font-size: 12px" href="" ><i class="fa fa-pencil">Xóa</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div id="myModalOrder" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header ">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Chi tiết mã đơn hàng  <b class="transaction_id"></b></h4>
				</div>
				<div class="modal-body" id="md_content">
					
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	
	@stop

	@section('script')
	<script>
		$(function(){
			$(".js_order_item").click(function(event) {
				event.preventDefault();
				let $this = $(this);
				let url = $this.attr('href');
				$(".transaction_id").text('').text($this.attr('data-id'));
				$("#myModalOrder").modal('show');

				console.log(url);

				$.ajax({
					url:url,
				}).done(function(result){
					console.log(result);
					if (result) {
						$("#md_content").html('').append(result);
					}
				});
			});
		})
	</script>
	@stop