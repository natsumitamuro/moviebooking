<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * ユーザ登録画面の表示
     */
    public function getRegister()
    {
        return view('register');
    }


    /**
     * 会員登録処理
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(UserRequest $request)
    {

        $user = new User;
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user -> classification = $request -> classification;
        $user -> gender = $request -> gender;
        $user -> status = '0';
        $user -> save();

        // ログイン画面へリダイレクト
        return redirect('/login');
    }


    /**
     * 編集画面の表示
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('edit', compact('user'));
    }

    /**
     * 編集更新処理
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,$id)
    {

        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user -> classification = $request -> classification;
        $user -> gender = $request -> gender;
        $user -> status = '0';        
        $user->save();

        // ホーム画面へリダイレクト
        return redirect('/');
    }

}