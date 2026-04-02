<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',[UserController::class,'showUsers'])->name('home');
Route::get('/user/{id}',[UserController::class,'singleUser'])->name('view.user');
Route::get('/add',[UserController::class,'addUser']);
Route::get('/update',[UserController::class,'updatedUser']);
Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.user');

// Route::get('/', function () {
//     return view('welcome');
// });
