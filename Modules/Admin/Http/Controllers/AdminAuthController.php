<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{

    public function getlogin()
    {
        return view('admin::auth.login');
    }

    public function postlogin(Request $request){


        $data = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($data)) {
             return redirect()->route('admin.dashboard');
        }

        return  redirect()->back();
       
    }

}
