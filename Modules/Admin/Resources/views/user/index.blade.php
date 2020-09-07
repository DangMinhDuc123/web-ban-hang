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
	<h3>Quản lý thành viên</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Tên hiển thị</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Hình Ảnh</th>
					<th>Thao Tác</th>
				</tr>
			</thead>
			<tbody>
				
				@if(isset($user))
				@foreach($user as $use)
				<tr>
					<td>{{ $use->id }}</td>
					<td>{{ $use->name }}</td>
					<td>{{ $use->email }}</td>
					<td>{{ $use->phone }}</td>
					<td>
						
					</td>
					<td>
						<a style="padding: 7px; border: 1px solid #999; font-size: 12px" href="" ><i class="fa fa-pencil">Cập Nhật</i></a>
						<a style="padding: 7px; border: 1px solid #999;font-size: 12px" href=""><i class="fa fa-trash">Xóa</i></a>
					</td>
				</tr>
				@endforeach
				@endif
				
			</tbody>
		</table>
	</div>

	@stop