<?php

// use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return view('hello');
// });

// //Cara Pertama
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// //Cara Kedua
// Route::get('hello', [HelloController::class, 'index']);
// Route::post('hello', [HelloController::class, 'create']);
// Route::get('world', [HelloController::class, 'world_message']);

