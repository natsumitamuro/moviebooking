<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
       if (Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')])) {
            return redirect('/');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
