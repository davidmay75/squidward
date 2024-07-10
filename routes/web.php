<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

// use App\Http\Controllers\WeatherController;

// Route::get('/users', [UserController::class, 'index']);
// // or
// Route::get('/users', 'App\Http\Controllers\UserController@index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/weather', function () {
    return view('weather');
});
Route::post('/weather', function () {
    // return WeatherController::get();
});

Route::post('/weather', [WeatherController::class, 'get']);
// Route::post('/weather', 'WeatherController@get');
