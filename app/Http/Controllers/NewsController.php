<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views;

class NewsController extends Controller
{
    public function news($id=0){
        $total = 2;
        if ($id == 0) {
            return view('news');
        } else if ($id >= $total) {
            return view('newsOut');
        }
        for ($i=0; $i <= $total; $i++) { 
            if ($i == $id) {
                return view('news'.$id);
            }
        }
    }
}
