@extends('admin::layouts.master')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
		<li><a href="#">Sản Phẩm</a></li>
		<li class="active">Danh sách</li>
	</ol>
</div>
<div class="table-responsive">
	<h2>Quản lý sản phẩm <a class="pull-right" href="{{route('admin.get.create.category')}}">Thêm Mới</a></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Tên Danh Mục</th>
				<th>Title Seo</th>
				<th>Trạng Thái</th>
				<th>Thao Tác</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($categories))
			@foreach($categories as $key=>$category)
			<tr>
				<td>{{$key+1}}</td>
				<td>{{$category->c_name}}</td>
				<td>{{$category->c_title_seo}}</td>
				<td>
					<a href="" class="label {{$category->getStatus($category->c_active)['class']}}">
						{{$category->getStatus($category->c_active)['name']}}
					</a>
				</td>
				<td>
					<a href="{{route('admin.get.edit.category',$category->id)}}">Edit</a>
					<a href="{{route('admin.get.action.category',['delete',$category->id])}}">Delete</a>
				</td>
			</tr>
			@endforeach
			@endif
			
		</tbody>
	</table>
</div>

@stop