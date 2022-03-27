@extends('layouts.layout')
@section('title', '詳細画面')
@include('layouts.sidebar')
@section('main')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="row">

        <div class="col-sm-6">
            <img src="/image/{{ $movie->image_path }}" alt="映画の画像" class="border">
        </div>
        <div class="col-sm-6">
            <p>{{ $movie->name }}</p>

            <p>{{ $movie->description }}</p>

            <div>
                @foreach ($movie->genres as $genre)
                    <p>{{ $genre->name }}</p>
                @endforeach
            </div>

            <p>上映時間 :{{ $movie->minutes }}分</p>
        </div>
    </div>


    <div class="border-bottom" style="padding:10px;margin:10px;"></div>
    <nav>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">
                    スケジュール
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">
                    レビュー
                </button>
            </li>
        </ul>
    </nav>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            @foreach ($scheduleds as $scheduled)
                <div class="row">
                    <div class="col-10">
                        <div class="border" style="padding:10px;margin:10px;">

                            <p>{{ \Carbon\Carbon::parse($schedule->start)->format('m月d日 G時i分') }}</p>
                            <p>スクリーン{{ $schedule->auditorium->name }}</p>
                            <p>{{ App\Models\Row::get_seats_count($schedule->auditorium_id) }}席</p>

                            @if (App\Models\Reservation::get_reservation_rate($schedule->id, $schedule->auditorium_id) === 100)
                                <p>×</p>
                            @elseif (App\Models\Reservation::get_reservation_rate($schedule->id, $schedule->auditorium_id) >= 70)
                                <p>△</p>
                            @else
                                <p>〇</p>
                            @endif

                            <!-- 予約ボタン -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="/reservation/{{ $schedule->id }}" class="btn btn-outline-secondary">予約</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            {{-- ログイン済みユーザーの場合、レビューを記入するFormを表示 --}}
            @auth
                {{-- 記入済みかチェック。すでに記入しているユーザーの場合、記入済のメッセージを表示 --}}
                @if ($can_review)
                    <div class="border col-7 p-2">
                        <br>
                        <h4>レビューを書く</h4>
                        <br>
                        <div class="row">
                            <div class="col-md">
                                <form action="{{ route('post.review') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                    <div class="form-group">
                                        <label>評価</label>
                                        @if ($errors->has('stars'))
                                            <br><small class="text-danger">{{ $errors->first('stars') }}</small>
                                        @endif
                                        <div class="rate-form">
                                            <input id="star5" type="radio" name="stars" value=5>
                                            <label for="star5">★</label>
                                            <input id="star4" type="radio" name="stars" value=4>
                                            <label for="star4">★</label>
                                            <input id="star3" type="radio" name="stars" value=3>
                                            <label for="star3">★</label>
                                            <input id="star2" type="radio" name="stars" value=2>
                                            <label for="star2">★</label>
                                            <input id="star1" type="radio" name="stars" value=1>
                                            <label for="star1">★</label>
                                        </div><br>

                                        <label>件名</label>
                                        @if ($errors->has('title'))
                                            @foreach ($errors->get('title') as $message)
                                                <br><small class="text-danger">{{ $message }}</small>
                                            @endforeach
                                        @endif
                                        <textarea name="title" class="form-control" rows="1">{{ old('title') }}</textarea>

                                        <label>本文</label>
                                        @if ($errors->has('review'))
                                            @foreach ($errors->get('review') as $message)
                                                <br><small class="text-danger">{{ $message }}</small>
                                            @endforeach
                                        @endif
                                        <textarea name="review" class="form-control" rows="3">{{ old('review') }}</textarea>
                                        <br>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">投稿</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div>すでにレビュー記入済みです</div>
                @endif
            @else
                {{-- ログインしていないユーザーの場合、ログイン画面でログインしたあとに詳細ページにリダイレクト --}}
                <br>
                <a href="/login?redirect=detail/{{ $movie->id }}">レビューを書く</a>
            @endauth

            {{-- レビューの表示 --}}
            @foreach ($movie_reviews as $movie_review)
                <div class="row">
                    <div class="col-10">
                        <div class="border" style="padding:10px;margin:10px;">
                            <img class="" src="{{ asset('/img/user_icon.jpeg') }}" alt="ユーザーアイコンの画像"><span
                                class="ms-3">{{ $movie_review->user->name }}</span>
                            <div class="rate-review">
                                @for ($a = 0; $a < $movie_review->stars; $a++)
                                    <input disabled type="radio">
                                    <label>★</label>
                                @endfor
                            </div>
                            <br>
                            <p class="fw-bold">{{ $movie_review->title }}</p>
                            <p class="small text-muted">{{ $movie_review->created_at->format('m月d日 G時i分') }}</p>
                            <p>{{ $movie_review->review }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
