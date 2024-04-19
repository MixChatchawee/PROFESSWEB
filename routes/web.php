<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/profess_rent', function () {
    return view('profess_rent');
})->name("profess_rent");

Route::get('/about_us', function () {
    return view('about_us');
})->name("about_us");

Route::get('/vision', function () {
    return view('vision');
})->name("vision");

Route::get('/why_us', function () {
    return view('why_us');
})->name("why_us");

Route::get('/contact_us', function () {
    return view('contact_us');
})->name("contact_us");

