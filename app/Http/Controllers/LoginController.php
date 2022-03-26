<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')])) {
            if ($request->redirect) {
                return redirect($request->redirect);
            } else {
                return redirect('/');
            }
        }
        return redirect('/login');
    }

    public function logout()
    {


        Auth::logout();
        return redirect('/');
    }

    public function index(Request $request)
    {
        $redirect = '';
        if ($request->redirect) {
            $redirect = $request->redirect;
        }
        return view('login', compact('redirect'));
    }
}
