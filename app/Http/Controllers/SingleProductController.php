<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index($slug){

        return view('front.detail', compact('slug'));        
    }
}
