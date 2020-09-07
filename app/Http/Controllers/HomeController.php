<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends FontEndController
{

	 public function __construct()
    {
    	parent::__construct();
    }

    public function index(){
    	$productHot = Products::where([
    		'pro_hot' => Products::HOT_ON,
    		'pro_active' => Products::STATUS_PUBLIC
    	])->limit(5)->get();
    	return view('home.index',compact('productHot'));
    }
}
