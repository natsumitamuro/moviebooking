@extends('layouts.layout')
@section('title','完了画面')
@include('layouts.sidebar')
@section('main')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="done" style="padding:10px 100px;margin:10px 100px;">
                <h1 class="p-2">購入完了しました。</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="border" style="padding:100px;margin:10px 100px 100px 100px;">
                タイトル、日にち、時間、座席
            </div>
        </div>
    </div> 

    <div class="row justify-content-center">
        <div class="col-8">
            <!-- ホームへ戻るボタン -->
            <div class="text-center">
                <button class="btn btn-secondary">戻る</button>
            </div>
        </div>
    </div> 
@endsection