@extends('layouts.layout')
@section('title','ログイン画面')
@section('main')
    <div class="container">
        <h2 class="card-title my-5 text-center">movieシステム</h2>
        <h3 class="card-title my-5 text-center">ログイン画面</h3>

        <form class="" method="POST" action="/login">
        @csrf
            <input type="hidden" name="redirect" value="{{ $redirect }}">
            <div class="col-md-3 mx-auto">
                <p class="mb-3">メールアドレス</p>
                <input type="text" class="form-control mb-3" name="email" required>
            </div>

            <div class="col-md-3 mt-3 mx-auto">
                <p class="mb-3">パスワード</p>
                <input type="password" class="form-control mb-3 " name="password" placeholder="パスワード" minlength="4" maxlength="128" required>
            </div>

            <div class="text-center form-button mb-3">
                <button type="submit" class="btn btn-success btn-lg">ログイン</button>
            </div>
        </form>

        <div class="text-center form-button">
            <a href="{{ url('/register') }}">
                <button type="submit" class="btn btn-primary btn-lg">新規登録</button>
            </a>
        </div>
    </div>
    @endsection
