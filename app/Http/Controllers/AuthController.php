<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login', ['title' => 'Log In']);
    }

    public function postLogin(Request $request){
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('/dashboard/');
        }
        return redirect('/login');
    }

    public function register(){
        return view('auth.register', ['title' => 'Register']);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
