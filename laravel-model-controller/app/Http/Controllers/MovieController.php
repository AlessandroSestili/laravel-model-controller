<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importo tabella "Movie"
use App\Movie;

class MovieController extends Controller
{
    function index() {

        $datiMovie = Movie::all();

        $datiView = [
            "movieList" => $datiMovie
        ];

        return view('home', $datiView);
    }
}
