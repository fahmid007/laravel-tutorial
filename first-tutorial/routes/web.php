<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('layouts/about');
    // return redirect('about');
})->name('about.us');

Route::get('/contact', function(){
    return view('layouts/contact');
})->name('contact.us');

Route::get('/country', function(){
    return view('layouts/country');
})->middleware('country');

//=======================Parameter======================//
// Route::get('/contact/{roll}', function($roll){
//     return "My roll is ".$roll;
// });
//=======================Parameter======================//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
