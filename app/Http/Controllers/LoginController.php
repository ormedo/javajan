<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request){
        return "login";
    }

    public function index(){
        return view('login');
    }
}
