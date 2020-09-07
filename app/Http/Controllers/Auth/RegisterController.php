<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {

        $user = new User();
        $user->name = $request->name; 
        $user->phone = $request->phone; 
        $user->email = $request->email; 
        $user->password = bcrypt($request->password); 
        $user->save();
       

        if ($user) {
           return redirect()->route('get.login');
        }

        return redirect()->back();
    }

   
}
