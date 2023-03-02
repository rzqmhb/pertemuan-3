<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function eduGames(){
        return view('eduGames');
    }

    public function kidsGames(){
        return view('kidsGames');
    }

    public function book(){
        return view('book');
    }

    public function song(){
        return view('song');
    }
}
