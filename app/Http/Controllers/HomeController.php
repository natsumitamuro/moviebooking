<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

/**
     * 映画情報取得
     *
     */
class HomeController extends Controller
{

    public function getmovies(Request $request)
    {
       $movies = Movie::all();
       return view('home_page',['movies'=>$movies]);
    }

    

}
