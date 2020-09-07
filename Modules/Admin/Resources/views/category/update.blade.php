@extends('admin::layouts.master')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
		<li><a href="{{route('admin.get.list.category')}}">Danh mục</a></li>
		<li class="active">Edit</li>
	</ol>
</div>
<div class="">
	<form action="" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Tên danh mục</label>
			<input type="text" class="form-control" value="{{ old('name',$category->c_name) }}" placeholder="Tên danh mục" name="name" >
			@if ($errors->has('name'))
				<span class="error-text">
					{{ $errors->first('name')}}
				</span>
			@endif
		</div>
		<div class="form-group">
			<label for="icon">Icon</label>
			<input type="text" class="form-control" value="{{ old('icon',$category->c_icon) }}"  placeholder="fa fa-home"  name="icon">
			@if ($errors->has('icon'))
				<span class="error-text">
					{{ $errors->first('icon')}}
				</span>
			@endif
		</div>
		<div class="form-group">
			<label for="c_title_seo">Meta Title:</label>
			<input type="text" class="form-control" value="{{old('c_title_seo',$category->c_title_seo)}}" placeholder="Meta Title"  name="c_title_seo">
			
		</div>
		<div class="form-group">
			<label for="c_description_seo">Meta Description</label>
			<input type="text" class="form-control" value="{{old('c_description_seo',$category->c_description_seo)}}"  placeholder="Meta Description"  name="c_description_seo">
		</div>
		<div class="form-group">
			<div class="checkbox">
				<label><input type="checkbox" name="hot">  Nổi bật</label>
			</div>
		</div>
		
		<button type="submit" class="btn btn-success">Lưu</button>
	</form>
</div>
@stop