@extends('admin::layouts.master')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
		<li><a href="#">Sản Phẩm</a></li>
		<li class="active">Danh sách</li>
	</ol>
</div>
<div class="row">
	<div class="col-sm-12">
		<form class="form-inline" action="" style="margin-bottom: 20px">
			<div class="form-group">
				<input type="text" class="form-control"   placeholder="Tên Sản Phẩm" name="name" value="{{ \Request::get('name') }}">
			</div>
			<div class="form-group">
				<select name="cate" id="" class="form-control">
					<option value="">Danh Mục</option>
					@if(isset($categories))
					@foreach($categories as $category)
					<option value="{{ $category->id }}" {{ \Request::get('cate') == $category->id ? "selected=''selected" : ""  }}>{{ $category->c_name }}</option>
					@endforeach
					@endif
				</select>
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<div class="table-responsive">
	<h3>Quản lý sản phẩm <a class="pull-right" href="{{route('admin.get.create.product')}}">Thêm Mới</a></h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Tên Sản Phẩm</th>
					<th>Loại Sản Phẩm</th>
					<th>Hình Ảnh</th>
					<th>Số lượng</th>
					<th>Trạng Thái</th>
					<th>Nổi Bật</th>
					<th>Thao Tác</th>
				</tr>
			</thead>
			<tbody>
				@if(isset($products))
				@foreach($products as $key=>$product)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>
						{{$product->pro_name}}
						<ul>
							<li><span><i class="fa fa-usd" aria-hidden="true"></i></span><span>{{ $product->pro_price }}</span></li>
							<li><span><i class="fa fa-usd" aria-hidden="true"></i></span><span>0%</span></li>
						</ul>
					</td>
					<td>{{isset($product->category->c_name) ? $product->category->c_name : '[M\D]'}}</td>
					<td>
						<img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive" style="width: 80px; height: 80px;">
					</td>
					<td>{{ $product->pro_number }}</td>
					<td>
						<a href="{{ route('admin.get.action.product',['active',$product->id]) }}" class="label {{ $product->getStatus($product->pro_active)['class'] }}">
							{{ $product->getStatus($product->pro_active)['name'] }}
						</a>
					</td>
					<td>
						<a href="{{ route('admin.get.action.product',['hot',$product->id]) }}" class="label {{ $product->getHot($product->pro_hot)['class'] }}">
							{{ $product->getHot($product->pro_hot)['name'] }}
						</a>
					</td>
					<td>
						<a style="padding: 7px; border: 1px solid #999; font-size: 12px" href="{{route('admin.get.edit.product',$product->id)}}" ><i class="fa fa-pencil">Cập Nhật</i></a>
						<a style="padding: 7px; border: 1px solid #999;font-size: 12px" href="{{route('admin.get.action.product',['delete',$product->id])}}"><i class="fa fa-trash">Xóa</i></a>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>

	@stop