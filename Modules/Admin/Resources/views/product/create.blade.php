@extends('admin::layouts.master')

@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
		<li><a href="{{route('admin.get.list.product')}}">Danh mục</a></li>
		<li class="active">Thêm mới</li>
	</ol>
</div>
<div class="">
	<form action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="col-sm-8">
			<div class="form-group">
				<label for="pro_name">Tên Sản Phẩm</label>
				<input type="text" class="form-control" value="{{old('pro_name')}}" placeholder="Tên danh mục" name="pro_name" >
				@if ($errors->has('pro_name'))
				<span class="error-text">
					{{ $errors->first('pro_name')}}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="icon">Mô Tả</label>
				<textarea class="form-control" placeholder="Mô tả ngắn sản phẩm" name="pro_description" id="" cols="30" rows="3"></textarea>
				@if ($errors->has('pro_description'))
				<span class="error-text">
					{{ $errors->first('pro_description')}}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="icon">Nội dung</label>
				<textarea class="form-control" placeholder="Nội dung" name="pro_content" id="pro_content" cols="30" rows="3"></textarea>
				@if ($errors->has('pro_content'))
				<span class="error-text">
					{{ $errors->first('pro_content')}}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="c_title_seo">Meta Title:</label>
				<input type="text" class="form-control"  placeholder="Meta Title"  name="c_title_seo">

			</div>
			<div class="form-group">
				<label for="pro_description_seo">Meta Description</label>
				<input type="text" class="form-control"  placeholder="Meta Description"  name="pro_description_seo">
			</div>
			@if ($errors->has('pro_description_seo'))
			<span class="error-text">
				{{ $errors->first('pro_description_seo')}}
			</span>
			@endif
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="name">Loại Sản Phẩm</label>
				<select name="pro_category_id" id="" class="form-control">
					<option value="">---Chọn Loại Sản Phẩm---</option>
					@if(isset($categories))
					@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->c_name }}</option>
					@endforeach
					@endif

				</select>
				@if ($errors->has('pro_category_id'))
				<span class="error-text">
					{{ $errors->first('pro_category_id')}}
				</span>
				@endif
			</div>
			<div class="form-group">
				<img src="{{ asset('img/thumbnail-default.jpg') }}" id="out_img" alt="" style="height: 300px;width: 100%">
			</div>
			<div class="form-group">
				<label for="name">Avatar</label>
				<input type="file" id="input_img" name="avatar" class="form-control">
			</div>
			<div class="form-group">
				<label for="pro_price">Gía sản phẩm</label>
				<input type="number" class="form-control" placeholder="Gía sản phẩm" name="pro_price" class="form-control">
				@if ( $errors->has('pro_price'))
				<span class="error-text">
					{{ $errors->first('pro_price')}}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="qty">Số lượng</label>
				<input type="number" class="form-control" placeholder="Số lượng sản phẩm" name="pro_number" value="0" class="form-control">
			</div>
			<div class="form-group">
				<label for="pro_sale">Khuyến Mại</label>
				<input type="number" class="form-control" placeholder="Khuyến Mại" name="pro_sale" value="0" class="form-control">
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox" name="hot">  Nổi bật</label>
				</div>
			</div>

			<button type="submit" class="btn btn-success">Lưu</button>
		</div>
	</form>
</div>
@stop

@section('script')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.replace('pro_content');
</script>
@stop