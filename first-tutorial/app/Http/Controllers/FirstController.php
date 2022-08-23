<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CustomController\secondController;
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
        // dd($request->all());

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['number'] = $request->number;

        // return redirect('/');
        // return redirect()->route('about.us');
        // return redirect()->action([secondController::class, 'testform']);
        return redirect()->action([secondController::class, 'test_form']);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:80'],
            'email' => ['required', 'max:80'],
            'pass' => ['required', 'min:6', 'max:20'],
        ]);
        dd($request->all());
    }
}
