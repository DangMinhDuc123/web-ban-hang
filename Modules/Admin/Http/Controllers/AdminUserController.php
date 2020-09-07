<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;

class AdminUserController extends Controller
{
   
    public function index(){ 
    	$user = User::whereRaw(1);

    	$user = $user->orderBy('id','DESC')->paginate(10);
        return view('admin::user.index',compact('user'));
    }

    
  
}
