@extends('layouts.layout')
@section('title','詳細画面')
@include('layouts.sidebar')
@section('main')
        <div class="row">
        
            <div class="col-sm-6">
                <img src="{{ asset('/image/'.$movie->image_path) }}" alt="映画の画像" class="border">
            </div> 
            <div class="col-sm-6">
                <p>{{ $movie->name }}</p>    
                
                <p>{{ $movie->description }}</p>    
                
                <p>上映時間 :{{ $movie->minutes }}分</p>    
            </div>
        </div>  
       

        <div class="border-bottom" style="padding:10px;margin:10px;"></div>
        @foreach($schedules as $schedule)
        <div class="row">
            <div class="col-10">
            <div class="border" style="padding:10px;margin:10px;">
                
                <p>{{\Carbon\Carbon::parse($schedule->start)->format('m月d日 G時i分')}}</p>
                
                <!-- 予約ボタン -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/scheuled_movie/{{$schedule->id}}">予約
                    </a>
                </div>
            </div>
            </div>
        </div> 
        @endforeach
@endsection
