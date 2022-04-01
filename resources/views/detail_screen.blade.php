@extends('layouts.layout')
@section('title','詳細画面')
@include('layouts.sidebar')
@section('main')
        <div class="row">
        
            <div class="col" style="padding-top: 30px;">
                <div class="text-center">
                    <img src="{{ asset('/image/'.$movie->image_path) }}" alt="映画の画像" class="border">
                </div>
            </div> 
            <div class="col" style="padding-top: 30px;">
                <h4>{{ $movie->name }}</h4>    
                
                <p>{{ $movie->description }}</p>    

                <div>
                    @foreach($movie->genres as $genre)
                        <p>{{ $genre->name }}</p>
                    @endforeach
                </div>
                
                <p>上映時間 :{{ $movie->minutes }}分</p>    
            </div>
        </div>  
       

        <div class="border-bottom" style="padding:10px;margin:10px;"></div>
        @foreach($schedules as $schedule)
        <div class="row">
            <div class="col-10">
                
            <div class="border" style="padding:10px;margin:10px;">
                
                <p>{{\Carbon\Carbon::parse($schedule->start)->format('m月d日 G時i分')}}</p>     
                <p>スクリーン{{$schedule->auditorium->name}}</p>
                <p>{{App\Models\Row::get_seats_count($schedule->auditorium_id)}}席</p>
                
                @if (App\Models\Reservation::get_reservation_rate($schedule->auditorium_id,$schedule->id) === 100)
                   <p>×</p>
                @elseif (App\Models\Reservation::get_reservation_rate($schedule->auditorium_id,$schedule->id) >=70)
                    <p>△</p>
                @else
                    <p>〇</p>
                @endif
            
                <!-- 予約ボタン -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/reservation/{{$schedule->id}}" class="btn btn-outline-secondary">予約
                    </a>
                </div>
            </div>
            </div>
        </div> 
        @endforeach
@endsection
