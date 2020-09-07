<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades;
use App\User;
use App\Models\Transaction;
use App\Models\Order;
use Carbon\Carbon;


class ShooppingCartController extends Controller
{
	public function addProduct(Request $request,$id)
	{
		$product = Products::select('pro_name','id','pro_price','pro_sale','pro_avatar','pro_sale','pro_number')->find($id);

		if (!$product) return redirect('/');

		$price = $product->pro_sale;
		if ($product->pro_sale) {
			$price = $price * (100 - $product->pro_sale)/100;
		}

		if($product->pro_number == 0){
			return redirect()->back()->with('warning','Sản Phẩm Đã Hết Hàng');
		}
		\Cart::add([
			'id' => $id, 
			'name' => $product->pro_name, 
			'qty' => 1, 
			'price' =>$product->pro_price,
			'weight' => 0,
			'options' => [
				'avatar' => $product->pro_avatar,
				'pro_sale' => $product->pro_sale,
				'price_old' => $product->pro_price
			],
		]);
		return redirect()->back();
	}

	public function getDelete($key){
		\Cart::remove($key);
		return redirect()->back();
	}

	public function getListShoppingCart(){
		$product = \Cart::content();
		return view('shopping.index',compact('product'));
	}

	public function getUpdateCart(Request $request,$id){
		if ($request->ajax()) {
			//1. lay tham so

			$qty = $request->qty ?? 1;
			$idProduct = $request->idProduct;
			$product = Products::find($idProduct);
			//2. kiem tra ton tai san pham

			if (!$idProduct) 
				return response(['messages' => 'Khong ton tai sp']);
			
			//3. kiem tra so luong san pham trong kho
			if ($product->pro_number < $qty) {
				return response(['messages' => 'Khong du sp']);
			}
			//4. update
			\Cart::update($id,$qty);
			return response([
				'messages' => 'Thanh cong',
				'totalMoney' => \Cart::subtotal(0),
				'totalMoneyItem' => number_format($product->pro_price * $qty)
		]);
		}
		//
	}


	public function getFormPay (){
		$products = \Cart::content();
		
		return view('shopping.pay',compact('products'));
	}


	public function saveInfoShopping(Request $request){
		$totalMoney = str_replace(',', '', \Cart::subtotal(0,3));
		$transactionId = Transaction::insertGetId([
			'tr_user_id' => get_data_user('web'),
			'tr_total'	=> (int)$totalMoney,
			'tr_phone' => $request->phone,
			'tr_note' => $request->note,
			'tr_address' => $request->address,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		if ($transactionId) {
			$products = \Cart::content();
			foreach ($products as $product) {
				Order::insert([
					'or_transaction_id' => $transactionId,
					'or_product_id'	=>$product->id,
					'or_qty' => $product->qty,
					'or_sale'=> $product->options->pro_sale,
					'or_price'=>$product->options->price_old
				]);
			}
		}

		\Cart::destroy();
		return redirect('/');
	}
}
