<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ScheduledMovie;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Seat;
use App\Models\Row;
use App\Models\Auditorium;

class BookingController extends Controller
{

/**
     * 予約画面の表示
     */
    public function booking($id)
    {
        $reservations = Reservation::where('user_id', '=', $id)->get();

        return view('/booking',compact('reservations'));
    }
}