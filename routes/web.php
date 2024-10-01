<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist.view',[TodoController::class, 'index'])->name('todo');//Penamaan Router
Route::post('/todolist.post',[TodoController::class, 'store'])->name('todo.post');

// Route::get('/todo', function () {
//     return view('todo.app');
// });

// Route::get('/hello', function () {
//     return view('coba.hello');
// }); 

// Route::get('/hello',[HelloController::class, 'coba']);