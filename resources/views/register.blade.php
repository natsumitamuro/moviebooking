@extends('layouts.layout')
@section('title','会員登録画面')
@section('main')
    <div class="container">
        <h2 class="card-title my-5 text-center">movieシステム</h2>
        <h3 class="card-title my-5 text-center">会員登録画面</h3>


        <form class="" method="POST" action="{{ route('register') }}">
@csrf

            <div class="col-md-3 mt-3 mx-auto" @if(!empty($errors->first('name'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('name')}}</span>
                <p class="mb-3">名前</p>
                <input type="text" class="form-control mb-3" name="name">
            </div>

            <div class="col-md-3 mx-auto" @if(!empty($errors->first('email'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('email')}}</span>
                <p class="mb-3">メールアドレス</p>
                <input type="text" class="form-control mb-3" name="email">
            </div>

            <div class="col-md-3 mx-auto" @if(!empty($errors->first('classification'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('classification')}}</span>
                <p class="mb-3">区分</p>
                <select class="form-control mb-3" name="classification" id="">
                    <option hidden value="">選択してください</option>
                    <option value="3">中学生以下</option>
                    <option value="2">高校生</option>
                    <option value="1">大学生/専門学校生</option>
                    <option value="0">大人</option>
                </select>
            </div>

            <div class="col-md-3 mx-auto" @if(!empty($errors->first('gender'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('gender')}}</span>
                <p class="">性別</p>
                <input type="radio" id="gender0" name="gender" value="0">
                <label for="gender0">男性</label>

                <input type="radio" id="gender1" name="gender" value="1">
                <label for="gender1">女性</label>

            </div>

            <div class="col-md-3 mt-3 mx-auto" @if(!empty($errors->first('password'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('password')}}</span>
                <p class="mb-3">パスワード</p>
                <input type="password" class="form-control mb-3 " name="password" placeholder="パスワード" minlength="4" maxlength="128">
            </div>

            <div class="text-center form-button">
                <button type="submit" class="btn btn-primary btn-lg">新規登録</button>
            </div>
        </form>
    </div>
@endsection
