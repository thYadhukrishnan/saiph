<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function admin(){
        return view('frontend.admin');
    }

    public function login(){
        $input=['email'=>request('email'),'password'=>request('password')];
        
        if (Auth::attempt($input,true)){
            return redirect()->route('welcome');
        }
        else{
            return redirect()->route('admin')->with('message','Invalid User');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        return redirect()->route('admin');
    }
}
