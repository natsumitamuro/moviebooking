<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\ScheduledMovie;

class DetailController extends Controller

    /**
     * 詳細画面の画像、タイトル、あらすじ、上映時間の表示
     */
{
    public function detail($movie_id)
    {
       $movie = Movie::find($movie_id);
       $scheduleds = $movie->scheduledMovies->sortBy('start');

       return view('detail_screen',compact('movie','scheduleds'));
    }

    /**
     * 詳細画面の今日以降の映画を表示
     
    *public function scheduled()
    *{
        * $scheduled = SchedulesMovie::find();
        *return $scheduled->hasMany('App\movie','scheduled_movies');
        
    *}*/
     
}
