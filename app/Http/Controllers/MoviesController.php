<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movie_data = Movies::all();

        return view('movies', compact('movie_data'));
    }
}
