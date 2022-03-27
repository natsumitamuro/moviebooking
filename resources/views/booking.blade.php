@extends('layouts.layout')
@section('title','詳細画面')
@include('layouts.sidebar')
@section('main')
<div class="container">
    <h2 class="card-title text-center">予約一覧</h2>
    @if(isset($reservations))
       <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">作品名</th>
                <th scope="col">日時</th>
                <th scope="col">スクリーン</th>
                <th scope="col">席番号</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->scheduled_movie->movie->name }}</td>
                <td>{{ \Carbon\Carbon::parse($reservation->scheduled_movie->start)->format('m月d日 G時i分') }}</td>
                <td>{{ $reservation->seat->row->auditorium->name }}</td>
                <td>{{ $reservation->seat->row->number }}-{{ $reservation->seat->number }}</td>
            </tr>
        @endforeach
        </tbody>
       </table>
    @else
        <h3 class="card-title text-center" style=margin:50px;>予約はありません</h3>
    @endif
</div>
@endsection 
                