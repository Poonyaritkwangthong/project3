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
    return view('welcome');
});

Route::get('/bio', function () {
    return view('bio',['name' => 'nes']);
});

Route::get('/air', function () {
    return view('air',['name' => 'nes']);
});

Route::get('/wifi', function () {
    return view('wifi',['name' => 'nes']);
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/propose', function () {
    return view('propose');
});

Route::get('/vote', function () {
    return view('vote');
});