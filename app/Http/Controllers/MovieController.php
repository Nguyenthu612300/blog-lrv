<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function getList(Request $request)
    {
        if(Auth::check()){

        }
    }


    public function watchMovie(Request $request)
    {
        
        if(Auth::check()){

        }
    }

    public function downMovie(Request $request)
    {
        
        if(Auth::check()){

        }
    }

}
