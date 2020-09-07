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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $transactions = DB::table('transactions')
                        ->join('users', 'users.id' , '=','transactions.tr_user_id')
                        ->select('users.name','transactions.tr_address','transactions.tr_phone','transactions.tr_total','transactions.tr_status','transactions.id','transactions.tr_note')
                        ->limit(5)->get();
        return view('admin::index',compact('transactions'));
    }

    

}
