<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index($genreId){
        $movies = Genre::find($genreId)->movies;
        $genre_names = Genre::select('id','name')->get();
        $genre = Genre::find($genreId);

        // dd($genre_names);
        return view('genre_page', compact('movies','genre','genre_names'));
    }

}
