<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //== index method ==//
    public function index()
    {
        return view('layouts/contact');
    }
    
    public function about_index()
    {
        return view('layouts/about');
    }
    public function country_index()
    {
        return view('layouts/country');
    }

}
