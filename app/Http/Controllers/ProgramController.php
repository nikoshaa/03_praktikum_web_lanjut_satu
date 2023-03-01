<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return view('program.index');
    }

    public function program1(){
        return view('program.program1');
    }

    public function program2(){
        return view('program.program2');
    }
}