@extends('layouts.layout')
@section('title','ホーム画面')
@include('layouts.sidebar')
@section('main')
<div class="col-sm-12 col-xs-12">
    <div class="text-center">
        <h1>上映映画情報</h1>
    </div>
</div>
<div class="d-flex flex-row flex-sm-wrap flex-xs-wrap">
    @foreach($movies as $movie)
    <div class="col-sm-6 col-xs-6" style="padding:10px;">
        <div class="text-center">
            <img src="/image/{{ $movie->image_path }}" alt="映画の画像" style="width:80%;"><br>
            <d>{{ $movie->name }}</b><br>
            <a href="/detail/{{ $movie->id }}">映画の詳細</a><br>
            <a href="/reservation">予約する</a>
            <div>
                @foreach($movie->genres as $genre)
                <a class="m-2" href="/genre/{{ $genre->id }}">
                    <span class="badge bg-info text-dark">{{$genre->name}}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection