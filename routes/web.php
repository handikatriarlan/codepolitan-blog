<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return view('hello');
// });

// //Cara Pertama
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

//Cara Kedua
Route::get('hello', [HelloController::class, 'index']);
Route::get('world', [HelloController::class, 'world_message']);
