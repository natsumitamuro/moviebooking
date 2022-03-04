@extends('layouts.layout')
@section('title','ホーム画面')
@include('layouts.sidebar')
@section('main')
    <div class="row">
        <div class="col-10">
            <h1>上映映画情報</h1>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
    </div>
@endsection
               