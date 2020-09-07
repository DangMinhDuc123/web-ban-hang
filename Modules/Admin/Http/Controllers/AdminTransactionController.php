<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\Products;

use DB;

class AdminTransactionController extends Controller
{

	public function index()
	{
		$transactions = DB::table('transactions')
						->join('users', 'users.id' , '=','transactions.tr_user_id')
						->select('users.name','transactions.tr_address','transactions.tr_phone','transactions.tr_total','transactions.tr_status','transactions.id')
						->get();
		return view('admin::transaction.index',compact('transactions'));
	}

	public function viewOrder(Request $request,$id){
		if($request->ajax())
		{
			$orders = Order::with('product')->where('or_transaction_id',$id)->get();

			$html = view('admin::components.order',compact('orders'))->render();
			return \response()->json($html);
		}
	}

	public function activeOrder($id){
		$transactions =  Transaction::find($id);

		$orders = Order::where('or_transaction_id',$id)->get();

		if ($orders) {
			foreach ($orders as $order) {
				$products = Products::find($order->or_product_id);
				$products->pro_number = $products->pro_number - $products->or_qty;
				$products->pro_pay++;
				$products->save();
			}
		}
		$transactions->tr_status = Transaction::STATUS_DONE;
		$transactions->save();
		return redirect()->back();

	}
}
