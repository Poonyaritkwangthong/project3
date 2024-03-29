<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\UserVoteController;
use App\Http\Controllers\FormReportController;
use App\Http\Controllers\SuggesController;

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

Route::get('/home', function () {
    return view('home');
});

Route::resource('/report',FormReportController::class);

Route::resource('/sugges',SuggesController::class);

Route::get('/vote_page', function () {
    return view('/vote_page');
});

Route::resource('/customer',CustomerController::class);

Route::resource('/news',NewsController::class);

Route::resource('/problem',ProblemController::class);
Route::resource('/suggestion',SuggestionController::class,);


Route::resource('/vote',VoteController::class);

Route::get('/user_vote', [UserVoteController::class, 'index']);
Route::get('/user_vote/{id}', [UserVoteController::class, 'result'])->name('result');
