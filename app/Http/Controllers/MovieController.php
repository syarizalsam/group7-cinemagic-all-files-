<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
//use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function moviez() {
        $movies = Movie::orderBy('title')
                // ->where('status', 'true')
                ->get();

        return view('movie')->with('movies', $movies);
    }

    //flip function
    public function flip($id){
        $flip = Movie::find($id);
        
        if ($flip->status == 'true'){
            $flip->status = 'false';
            $flip->save();
        }
        else{
            $flip->status = 'true';
            $flip->save();
        }

        $movies = Movie::orderBy('title')
                ->where('status', 'true')
                ->get();
        
        return view('movie')->with('movies', $movies);
    }
}