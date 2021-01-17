<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
//use Illuminate\Support\Facades\DB;

class ListController extends Controller
{   
    public function list(){
        $movies = Movie::orderBy('title')
                ->where('status', 'false')
                ->get();

        return view('list')->with('movies', $movies);
    }

    //flip function
    public function flip($id){
        $flip = Movie::find($id);
        
        if ($flip->status == 'false'){
            $flip->status = 'true';
            $flip->save();
        }
        else{
            $flip->status = 'false';
            $flip->save();
        }

        $movies = Movie::orderBy('title')
                ->where('status', 'false')
                ->get();

        return view('list')->with('movies', $movies);
    }
}