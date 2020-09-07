<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Category;



class AdminCategoryController extends Controller
{

	public function index()
	{
		$categories = Category::paginate(10);

		$viewData = [
			'categories' => $categories
		];
		return view('admin::category.index',$viewData);
	}

	public function create(){
		return view('admin::category.create');
	}

	public function store(RequestCategory $requestCategory){
		$category = new Category();
		$category->c_name = $requestCategory->name;
		$category->c_slug = str_slug($requestCategory->name);
		$category->c_icon = $requestCategory->icon;
		$category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
		$category->c_description_seo = $requestCategory->c_description_seo;
		$category->save();
		return redirect()->back();
	}


	public function edit($id){
		$category = Category::find($id);
		return view('admin::category.update',compact('category'));
	}

	public function update(RequestCategory $requestCategory,$id){
		$category = Category::find($id);
		$category->c_name = $requestCategory->name;
		$category->c_slug = str_slug($requestCategory->name);
		$category->c_icon = $requestCategory->icon;
		$category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
		$category->c_description_seo = $requestCategory->c_description_seo;
		$category->save();
		return redirect()->back();
	}

	public function action(Request $request,$action,$id){
		if ($action) {
			$category = Category::find($id);
			switch ($action) 
			{
				case 'delete':
				$category->delete();
					break;
			}
		}
		return redirect()->back();
	}
}
