<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }

    public function checkLogin(AdminLoginRequest $request){
        //validation
        //return $request;

        //check , store , update
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember_me)) {
            
            //notify()->success('login done');
            return redirect()->route('admin.dashboard');
        }
        //notify()->success('wrong info please try again');
        return redirect()->back()->with(['error'=>'there are wrong in info']);
    }
}
