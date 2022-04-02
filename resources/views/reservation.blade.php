@extends('layouts.layout')
@section('title','予約画面')
@include('layouts.sidebar')
@section('main')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="container"></div>
    <div class="row justify-content-center">
        <div class="main-header">
            <h1 class="p-2">予約画面</h1>
        </div>
    </div>    

    <!-- 予約メッセージ -->
    <div class="row justify-content-center">
        <div class="col-6 mb-4 py-4">
            座席を選択して下さい。
        </div>
    </div>

    <!-- アイコン説明 -->
    <div class="row justify-content-center">
        <div class="col-6 mb-4">
            <p class="">アイコン説明</p>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item flex-fill"><button class="seat"></button> 空席</li>
                <li class="list-group-item flex-fill"><button class="seat reserved"></button> 購入済み</li>
                <li class="list-group-item flex-fill"><button class="seat selected"></button> 選択した席</li>
            </ul>
        </div>
    </div>

    <!-- 席 -->
    <div class="row justify-content-center">
        <div class="screen-box bg-secondary col-6 p-1">
                <p class="screen-name m-4">SCREEN 1</p>
                <div class="screen-box-inline p-4">
                    <table id="target">
                        <!-- 1列目 -->
                        <!-- 取得した列を表示 -->
                        @foreach($seats as $row)
                        <tr>
                            <!-- 取得した席を表示 -->
                            @foreach($row as $seat)
                            <!-- in_array($検索する値,検索する対象) -->
                            @if(in_array ($seat->id,array_column($reservedseats,'seat_id') ))
                            <td><button type="button" class="seat reserved" ></button></td>
                            @else
                            <td><button type="button" name="seat_id" id="{{$seat->id}}" class="seat" onclick="AddClass( {{$seat->id}} )"></button></td>
                            
                            @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>

    <!-- 購入ボタン -->
    <div class="row justify-content-center">
        <button id="submit" class="btn btn-outline-secondary col-1 my-4" onclick="buyticket({{ $scheduled_movie_id }})">購入</button>
    </div>
@endsection  
@section('script')
<script src="{{ mix('js/seat.js') }}"></script>
@endsection
