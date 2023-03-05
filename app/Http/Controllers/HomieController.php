<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomieController extends Controller
{
    public function index(){
        return view('homie');
    }
}
