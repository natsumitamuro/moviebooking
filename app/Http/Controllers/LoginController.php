<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログイン機能
     */
    public function login(Request $request)
    {
       if (Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')])) {
            return redirect('/');
        }
        return redirect('/login');
    }

    /**
     * ログアウト機能
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
