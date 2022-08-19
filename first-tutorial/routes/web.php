<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\FirstInvokeController;

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


// Route::get('/about', function(){
//     return view('layouts/about');
//     // return redirect('about');
// })->name('about.us');

// Route::get('/contact', function(){
//     return view('layouts/contact');
// })->name('contact.us');

//==========laravel-7====================//
// Route::get('/contact', 'FirstController@index')->name('contact.us');

//==========laravel-8,9====================//
Route::get('/about', [FirstController::class, 'about_index'])->name('about.us');
Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');
Route::post('/student/store', [FirstController::class, 'student_store'])->name('student.store');




// Route::get('/country', [FirstController::class, 'country_index'])->name('country.us');
// Route::get('/test', FirstInvokeController::class);
// Route::get('/hello', FirstInvokeController::class, 'hello'); //everything is okay but can't view. coz invoke is first priority
// Route::get('/country', [FirstController::class, 'country_index'])->middleware('country');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
