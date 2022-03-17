@extends('layouts.layout')
@section('title','会員登録画面')
@section('main')
    <div class="container">
        <h2 class="card-title my-5 text-center">movieシステム</h2>
        <h3 class="card-title my-5 text-center">会員登録画面</h3>

        <form class="" method="POST" action="">
            <div class="col-md-3 mt-3 mx-auto">
                <p class="mb-3">名前</p>
                <input type="text" class="form-control mb-3" name="name" required>
            </div>

            <div class="col-md-3 mx-auto">
                <p class="mb-3">メールアドレス</p>
                <input type="text" class="form-control mb-3" name="email" required>
            </div>

            <div class="col-md-3 mx-auto">
                <p class="mb-3">区分</p>
                <select class="form-control mb-3" name="" id="" required>
                    <option hidden>選択してください</option>
                    <option value="中学生以下">中学生以下</option>
                    <option value="高校生">高校生</option>
                    <option value="大学生/専門学校生">大学生/専門学校生</option>
                    <option value="大人">大人</option>
                </select>
            </div>

            <div class="col-md-3 mx-auto">
                <p class="">性別</p>
                <input type="radio" id="gender1" name="contact" value="male">
                <label for="gender1">男性</label>

                <input type="radio" id="gender2" name="contact" value="famale">
                <label for="gender2">女性</label>
            </div>

            <div class="col-md-3 mt-3 mx-auto">
                <p class="mb-3">パスワード</p>
                <input type="password" class="form-control mb-3 " name="password" placeholder="パスワード" minlength="4" maxlength="128" required>
            </div>

            <div class="text-center form-button">
                <button type="submit" class="btn btn-primary btn-lg">新規登録</button>
            </div>
        </form>
    </div>
@endsection
