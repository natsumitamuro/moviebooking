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

    public function ranking()
    {
        //$result=Movie::all()->scheduledMovies()->reservations()->groupBy('id')->count();
        //dd($result);

        /*$max = Movie::count();
        $ranking1 = [0,'null'];
        $ranking2 = [0,'null'];
        $ranking3 = [0,'null'];
        
        for($i=1;$i<=$max;$i++){
            $ranking = [
                Reservation::with(['scheduled_movie' => function ($query) {
                    $query->where('movie_id','=',$i);
                }])->count(),
                Movie::find($i)->name,
            ];
            

            if($ranking[0] > $ranking1[0]){
                $ranking3 = $ranking2;
                $ranking2 = $ranking1;
                $ranking1 = $ranking;
            }
            elseif($ranking[0] > $ranking2[0]){
                $ranking3 = $ranking2;
                $ranking2 = $ranking;
            }
            elseif($ranking[0] > $ranking3[0]){
                $ranking3 = $ranking;
            }
        }
        */

        /*$reservtions = Movie::with(['scheduledMovies.reservations'=> function ($query) {
            $query->groupBy('id');
            $query->count();
        }])->get();
        */

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

