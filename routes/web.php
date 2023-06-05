<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/categories', [CategoriesController::class, 'getCategories']);

Route::get('/studying', function () {
    return view('Studying');
});

Route::get('/editing-and-design', function () {
    return view('Editing');
});

Route::get('/presentations', function () {
    return view('Presentation');
});

Route::get('/coding', function () {
    return view('Coding');
});

Route::get('/dubbing-and-subtitling', function () {
    return view('Dubbing');
});

Route::get('/business', function () {
    return view('Business');
});

Route::get('/entertainment', function () {
    return view('Entertainment');
});

Route::get('/content-creators', function () {
    return view('ContentCreators');
});


