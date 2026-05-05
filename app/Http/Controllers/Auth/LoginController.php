<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginView(){
        return view('auth.login');
    }

    /**
     * Handle the login request into the application.
     */
    public function login(Request $request){
        //
    }
}