<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo',[TodoController::class, 'index']);
Route::post('/todo',[TodoController::class, 'store']);

// Route::get('/todo', function () {
//     return view('todo.app');
// });

// Route::get('/hello', function () {
//     return view('coba.hello');
// }); 

// Route::get('/hello',[HelloController::class, 'coba']);