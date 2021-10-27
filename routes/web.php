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
    $array_tmp = config('data');
    $data = [
        'fumetti' => $array_tmp,
    ];
    return view('homepage', $data);
})->name('home');
Route::get('/movies', function () {
    return view('movies');
})->name('film');
Route::get('/tv', function () {
    return view('tv');
})->name('tv');
