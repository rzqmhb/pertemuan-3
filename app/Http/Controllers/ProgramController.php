<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view('karir');
    }

    public function magang(){
        return view('magang');
    }

    public function kunjungan(){
        return view('kunjungan');
    }
}