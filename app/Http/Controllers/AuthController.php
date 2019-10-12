<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;     
    //  use AuththenticatesUsers; 
    public function getLoginForm(){
        return view('auth/login');
    }
    public function login(Request $request){
        if($this->attemptLogin($request)){
            return redirect()->route('users.index');
        }
        return redirect()->route('auth.login');

    }
}
