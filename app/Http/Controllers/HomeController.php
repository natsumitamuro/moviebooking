<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * 映画情報取得
     *
     */
    public function getmovies(Request $request)
    {
       $movies = Movie::all();
       return view('home_page',['movies'=>$movies]);
    }

}
