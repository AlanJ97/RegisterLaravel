<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomController extends Controller
{
    public function showRegisterForm(){           
        return view('custom.register');
    }
    public function register(Request $request){      
        $this->validation($request);
        User::create($request->all());
        return redirect('/')->with('Status','You are registed');
    }
    public function validation($request){
        return $this->validate($request, [
            "fname" => 'required|max:255',
            "lname" => 'required|max:255',
            "email" => 'required|email|unique:users|max:255',
            "password" => 'required|confirmed|max:255'
        ]);
    }
}
