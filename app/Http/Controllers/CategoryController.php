<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getListProduct(Request $request)
    {
    	$url = $request->segment(2);
    	$url = preg_split('/(-)/i', $url);

    	if ($id = array_pop($url)) {
    		$products = Products::where([
    			'pro_category_id' => $id,
    			'pro_active'=> Products::STATUS_PUBLIC
    		]);

            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '1':
                    $products = Products::where('pro_price','<',1000000);
                    break;
                    case '2':
                    $products = Products::whereBetween('pro_price',[1000000,3000000]);
                    break;
                    case '3':
                    $products = Products::whereBetween('pro_price',[3000000,5000000]);
                    break;
                    case '4':
                    $products = Products::whereBetween('pro_price',[5000000,7000000]);
                    break;
                    case '5':
                    $products = Products::where('pro_price','>',7000000);
                    break;
                    
                }
            }

            if ($request->orderby) {
                $orderby = $request->orderby;
                switch ($orderby) {
                    case 'desc':
                    $products->orderBy('id','DESC');
                    break;
                    case 'asc':
                    $products->orderBy('id','ASC');
                    break;
                    case 'price_max':
                    $products->orderBy('pro_price','ASC');
                    break;
                    case 'price_min':
                    $products->orderBy('pro_price','DESC');
                    break;
                    default:
                    $products->orderBy('id','DESC');
                    break;

                }
            }

            $products = $products->orderby('id','DESC')->paginate(10) ; 

            $cateProduct = Category::find($id);

            return view('product.index',compact('products','cateProduct'));
        }
        return redirect('/');
    }
}
