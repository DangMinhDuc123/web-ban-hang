<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductDetailController extends Controller
{
    public function getProductDeatil(Request $request)
    {
    	$url = $request->segment(2);
    	$url = preg_split('/(-)/i', $url);

    	if ($id = array_pop($url)) {
    		$productDetail = Products::where('pro_active', Products::STATUS_PUBLIC)->find($id);

    		return view('product.detail',compact('productDetail'));
    	}
    	
    }
}
