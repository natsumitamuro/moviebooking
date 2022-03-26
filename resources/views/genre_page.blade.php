@extends('layouts.layout')
@section('title','ホーム画面')
@include('layouts.sidebar')
@section('main')
    <div class="row">
        <div class="col-10 my-2">

            <h3>ジャンル別表示「 {{ $genre->name }} 」</h3> 
        </div>

        <div class="col-6 p-1 my-2">
            <select class="form-select" aria-label="Default select example" onchange="location=this.value">
                <option selected>映画ジャンル選択</option>
                @foreach ($genre_names as $genre_name)
                    <option value="{{route('genre.index', $genre_name->id)}}">{{ $genre_name->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        @if(count($movies)>0)
            @foreach ($movies as $movie)
            <div class="col-5 my-4">
                <img src="{{ asset('image/'.$movie->image_path) }}" alt="映画の画像" class="border col-7"><br>
                <b>{{ $movie->name }}</b><br>
                <a href="/detail/{{ $movie->id }}">映画の詳細</a><br>
                <a href="/reservation">予約する</a>
            </div>
            @endforeach
            @else
            <div class="col-5 p-3 my-2">
                <div>該当の映画はありません</div>
            </div>
        @endif
    </div>
@endsection
               