@extends('layouts.layout')
@section('title', '詳細画面')
@include('layouts.sidebar')
@section('main')
    <div class="row">

        <div class="col-sm-6">
            <img src="{{ asset('/image/' . $movie->image_path) }}" alt="映画の画像" class="border">
        </div>
        <div class="col-sm-6">
            <p>{{ $movie->name }}</p>

            <p>{{ $movie->description }}</p>

            <p>上映時間 :{{ $movie->minutes }}分</p>
        </div>
    </div>


    <div class="border-bottom" style="padding:10px;margin:10px;"></div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-schedule-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">上映スケジュール</a>
            <a class="nav-item nav-link" id="nav-movie-review" data-toggle="tab" href="#nav-profile" role="tab"
                aria-controls="nav-profile" aria-selected="false">レビュー</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!-- 上映スケジュールタブの内容 -->
        <div class="tab-pane fade show active" id="nav-movie-review" role="tabpanel" aria-labelledby="nav-schedule-tab">
            @foreach ($scheduleds as $scheduled)
                <div class="row">
                    <div class="col-10">
                        <div class="border" style="padding:10px;margin:10px;">

                            <p>{{ \Carbon\Carbon::parse($scheduled->start)->format('m月d日 G時i分') }}</p>

                            <!-- 予約ボタン -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="">
                                    <button class="btn btn-secondary" type="button">予約</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- レビュータブの内容 -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @auth
                {{-- ログイン済みユーザーの場合 --}}
                <div class="border col-7 p-2">
                    <br>
                    <h4>レビューを書く</h4>
                    <br>
                    <div class="row">
                        <div class="col-md">
                            <form>
                                <div class="form-group">
                                    <label>本文</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row center-block text-center">
                        <div class="col-1">
                        </div>
                        <div class="col-5 center-block">
                            <button type="button" class="btn btn-secondary">投稿</button>
                        </div>
                    </div>
                </div>
            @else
                {{-- ログインしていないユーザーの場合 --}}
                <br>
                <a href="/login?redirect=detail/{{ $movie->id }}">レビューを書く</a>
            @endauth

            @foreach ($movie_reviews as $movie_review)
                <div class="row">
                    <div class="col-10">
                        <div class="border" style="padding:10px;margin:10px;">
                            <p>{{ $movie_review->user->name }}</p>
                            <p class="small text-muted">{{ $movie_review->created_at->format('m月d日 G時i分')}}</p>
                            <p>{{ $movie_review->review }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
