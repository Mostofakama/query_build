<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/users',[UserController::class,'showdata']);

Route::get('/user/{id}',[UserController::class,'showuser'])->name('one.users.detels');

Route::get('/update',[UserController::class,'update']);

Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete.user');

Route::get('/insert',[UserController::class,'insert']);