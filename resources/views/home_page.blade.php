@extends('layouts.layout')
@section('title', 'ホーム画面')
@include('layouts.sidebar')
@section('main')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="col-sm-12 col-xs-12">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner carousel-fade">
                @foreach ($movies->take(5) as $movie)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <a href="/detail/{{ $movie->id }}"><img src="/image/{{ $movie->image_path }}"
                                    class="d-block w-100"  alt="{{ $movie->name }}の画像">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="p-3 mb-2 bg-secondary text-white d-inline">{{ $movie->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="carousel-item">
                            <a href="/detail/{{ $movie->id }}"><img src="/image/{{ $movie->image_path }}"
                                    class="d-block w-100" alt="{{ $movie->name }}の画像">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="p-3 mb-2 bg-secondary text-white d-inline">{{ $movie->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <br>

        <div class="text-center">
            <h1>上映映画情報</h1>
        </div>
    </div>
    <div class="d-flex flex-row flex-sm-wrap flex-xs-wrap">
        @foreach ($movies as $movie)
            <div class="col-sm-6 col-xs-6" style="padding:10px;">
                <div class="text-center">
                    <img src="/image/{{ $movie->image_path }}" alt="映画の画像" style="width:80%;"><br>
                    <b>{{ $movie->name }}</b><br>
                    <a href="/detail/{{ $movie->id }}">映画の詳細</a><br>
                    <div>
                        @foreach ($movie->genres as $genre)
                            <a class="m-2" href="/genre/{{ $genre->id }}">
                                <span class="badge bg-info text-dark">{{ $genre->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
