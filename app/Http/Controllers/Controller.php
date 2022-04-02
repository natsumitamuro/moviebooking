<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\ScheduledMovie;
use App\Models\Movie;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //映画ごとの予約数をカウント
    public function ranking()
    {

        $groups = DB::table('movies')  //＄groupsは変数にいれてるだけ
             ->leftJoin('scheduled_movies', 'movies.id', '=', 'scheduled_movies.movie_id')
             ->leftJoin('reservations', 'scheduled_movies.id', '=', 'reservations.scheduled_movie_id')
             ->select('movies.id', 'movies.name', DB::raw("count(scheduled_movies.movie_id) as count"))
             ->groupBy('movies.id')
             ->orderByDesc('count')
             ->limit(3)
             ->get();

        return [$groups[0],$groups[1],$groups[2]];
    }
}

