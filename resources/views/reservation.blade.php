@extends('layouts.layout')
@section('title','予約画面')
@include('layouts.sidebar')
@section('main')
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
                <li class="list-group-item flex-fill"><img src="{{ asset('img/seat_1.gif') }}" alt=""> 空席</li>
                <li class="list-group-item flex-fill"><img src="{{ asset('img/seat_2.gif') }}" alt=""> 購入済み</li>
            </ul>
        </div>
    </div>

    <!-- 席 -->
    <div class="row justify-content-center">
        <div class="screen-box bg-secondary col-6 p-1">
                <p class="screen-name m-4">SCREEN 1</p>
                <div class="screen-box-inline p-4">
                    <table>
                        <!-- 1列目 -->
                        <tr>
                            <td>A</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>A</td>
                        </tr>
                        <!-- 2列目 -->
                        <tr>
                            <td>B</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>B</td>
                        </tr>
                        <!-- 3列目 -->
                        <tr>
                            <td>C</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>C</td>
                        </tr>
                        <!-- 4列目 -->
                        <tr>
                            <td>D</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>D</td>
                        </tr>
                        <!-- 5列目 -->
                        <tr>
                            <td>E</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>E</td>
                        </tr>
                        <!-- 6列目 -->
                        <tr>
                            <td>F</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>F</td>
                        </tr>
                        <!-- 7列目 -->
                        <tr>
                            <td>G</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>G</td>
                        </tr>
                        <!-- 8列目 -->
                        <tr>
                            <td>H</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>H</td>
                        </tr>
                        <!-- 9列目 -->
                        <tr>
                            <td>I</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>I</td>
                        </tr>
                        <!-- 10列目 -->
                        <tr>
                            <td>J</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>J</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>

    <!-- 購入ボタン -->
    <div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary col-1 my-4">購入</button>
    </div>
@endsection  
