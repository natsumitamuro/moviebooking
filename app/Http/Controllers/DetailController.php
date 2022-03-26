<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\Review;

use App\Models\User;

use App\Models\ScheduledMovie;

class DetailController extends Controller

{
   /**
    * $movie = 詳細画面の画像、タイトル、あらすじを表示
    * $scheduleds = 上映時間の表示、(sortBy)で日にち順
    * $movie_reviews = movie_idに紐づくレビュー
    */

   public function detail($movie_id)
   {
      $movie = Movie::find($movie_id);
      $scheduleds = $movie->scheduledMovies->sortBy('start');
      $movie_reviews = Review::where('movie_id', $movie_id)->get()->sortByDesc('created_at');
      return view('detail_screen', compact('movie', 'scheduleds', 'movie_reviews',));
   }
}
