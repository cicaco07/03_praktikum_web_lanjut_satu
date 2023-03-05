<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function bestseller(){
        return view('bestseller');
    }

    public function food(){
        return view('food');
    }

    public function promo(){
        return view('promo');
    }
}