<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use DB;

class AdminProductController extends Controller
{

    public function index( Request $request)
    {  
        // $products = DB::table('products')
        //             ->join('categories', 'categories.id', '=', 'products.pro_category_id')
        //             ->select('products.pro_name','categories.tr_address','products.id','products.pro_active','.tr_status')
        //             ->get();

        $products = Products::with('category:id,c_name');
        if ($request->name) $products->where('pro_name','like','%'.$request->name.'%');
        if ($request->cate) $products->where('pro_category_id',$request->cate);   
        
        $products = $products->orderBy('id','desc')->paginate(10);
        $categories = Category::all();
        return view('admin::product.index',compact('products','categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin::product.create',compact('categories'));
    }


    public function store(RequestProduct $requestProduct)
    {
        $product = new Products();
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = str_slug($requestProduct->pro_name);
        $product->pro_description = $requestProduct->pro_description;
        $product->pro_content = $requestProduct->pro_content;
        $product->pro_description_seo = $requestProduct->pro_description_seo;
        $product->pro_title_seo = $requestProduct->pro_title_seo;
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_number = $requestProduct->pro_number;
        $product->pro_category_id = $requestProduct->pro_category_id;

        if ( $requestProduct->hasFile('avatar') ) {
            $file = upload_image('avatar');
            if (isset($file['name'])) {
                $product->pro_avatar = $file['name'];
            }
        }
        $product->save();

        return redirect()->back()->with('success','Thêm mới thành công');
    }


    public function edit($id){
        $product = Products::find($id);
        $categories = $this->getCategories();
        return view('admin::product.update',compact('product','categories'));
    }

    public function getCategories(){
        return Category::all();
    }

    public function update(RequestProduct $requestProduct,$id){
       $product = Products::find($id);
       $product->pro_name = $requestProduct->pro_name;
       $product->pro_slug = str_slug($requestProduct->pro_name);
       $product->pro_description = $requestProduct->pro_description;
       $product->pro_content = $requestProduct->pro_content;
       $product->pro_description_seo = $requestProduct->pro_description_seo;
       $product->pro_title_seo = $requestProduct->pro_title_seo;
       $product->pro_category_id = $requestProduct->pro_category_id;
       $product->pro_price = $requestProduct->pro_price;
       $product->pro_sale = $requestProduct->pro_sale;
       $product->pro_number = $requestProduct->pro_number;
       $product->pro_category_id = $requestProduct->pro_category_id;

       if ( $requestProduct->hasFile('avatar') ) {
            $file = upload_image('avatar');
            if (isset($file['name'])) {
                $product->pro_avatar = $file['name'];
            }
        }

       $product->save();

       return redirect()->back()->with('success','Sửa thành công');
   }

   public function action(Request $request,$action,$id){
    $mess = '';
       if ($action) {
           $product = Products::find($id);
           switch ($action) 
           {
               case 'delete':
               $product->delete();
                $mess = 'Xóa Thành Công';
               break;

               case 'active':
               $product->pro_active =  $product->pro_active ? 0 :1;
               $product->save();
               break;
               case 'hot':
               $product->pro_hot = $product->pro_hot ? 0 : 1;
               $product->save();
               break;

           }
       }
       return redirect()->back()->with('success', $mess);
   }
}
