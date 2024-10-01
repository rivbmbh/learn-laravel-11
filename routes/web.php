<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist',[TodoController::class, 'index'])->name('todo.view');//Penamaan Router
Route::post('/todolist',[TodoController::class, 'store'])->name('todo.post');
// waspada : put hanya bisa digunakan satu kali saja!!
Route::put('/todolist/{id}',[TodoController::class, 'update'])->name('todo.update');//untuk menangani update form
Route::delete('/todolist/{id}',[TodoController::class, 'destroy'])->name('todo.delete');//untuk menangani delete

// Route::get('/todo', function () {
//     return view('todo.app');
// });

// Route::get('/hello', function () {
//     return view('coba.hello');
// }); 

// Route::get('/hello',[HelloController::class, 'coba']);