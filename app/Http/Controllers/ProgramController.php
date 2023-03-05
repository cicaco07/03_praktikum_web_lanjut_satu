<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('program');
    }

    public function puasa(){
        return view('puasa');
    }
    
    public function gratis(){
        return view('gratis');
    }
    
    public function takjil(){
        return view('takjil');
    }
    
}
