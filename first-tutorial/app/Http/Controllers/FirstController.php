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
    
    //___about_index___//
    public function about_index()
    {
        return view('layouts/about');
    }

    //___country_index___//
    public function country_index()
    {
        return view('layouts/country');
    }

    //___student_store__//
    public function student_store(Request $request)
    {
        dd($request->all());
    }

}
