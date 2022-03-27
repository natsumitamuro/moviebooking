<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\Review;

use App\Models\User;

use App\Models\ScheduledMovie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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
      if ($movie_reviews->contains('user_id', '==', Auth::id())) {
         $can_review = false;
      } else {
         $can_review = true;
      };
      return view('detail_screen', compact('movie', 'scheduleds', 'movie_reviews', 'can_review'));
   }

   public function review(Request $request)
   {
      $request->validate([
         'stars' => 'required',
         'title' => 'required|max:30',
         'review' => 'required|min:40'
      ],
       [
         'stars.required' => '※選択は必須です',   
         'title.required' => '※件名は必須項目です。',
         'title.max' => '※30文字以内で入力してください。',
         'review.required'  => '※レビューは必須項目です。',
         'review.min' => '※40文字以上入力してください。',

       ]);

      $review = new Review();
      $review->user_id = Auth::id();
      $review->movie_id = $request->movie_id;
      $review->title = $request->title;
      $review->stars = $request->stars;
      $review->review = $request->review;
      $review->save();
      return redirect()->route('detail.id', $request->movie_id);
   }
}
