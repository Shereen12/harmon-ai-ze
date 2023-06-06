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


Route::get('/', function () {
    return view('index', ['title' => 'Harmon-ai-ze']);
});

Route::get('/studying', function () {
    return view('Studying', ['title' => 'Studying']);
});

Route::get('/editing-and-design', function () {
    return view('Editing', ['title' => 'Editing and Design']);
});

Route::get('/presentations', function () {
    return view('Presentation', ['title' => 'Presentations']);
});

Route::get('/coding', function () {
    return view('Coding', ['title' => 'Coding']);
});

Route::get('/dubbing-and-subtitling', function () {
    return view('Dubbing', ['title' => 'Dubbing and Subtitling']);
});

Route::get('/business', function () {
    return view('Business', ['title' => 'Business']);
});

Route::get('/entertainment', function () {
    return view('Entertainment', ['title' => 'Entertainment']);
});

Route::get('/content-creators', function () {
    return view('ContentCreators', ['title' => 'Content Creators']);
});


