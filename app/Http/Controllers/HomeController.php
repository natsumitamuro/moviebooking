<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class HomeController extends Controller
{

    public function getmovies(Request $request)
    {
       $movies = movie::select('name','img_pass')->get();
       return view('home_page',['movies'=>$movies]);
    }

}
