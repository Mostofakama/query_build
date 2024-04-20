<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserController::class,'showdata'])->name('home');

Route::get('/user/{id}',[UserController::class,'showuser'])->name('one.users.detels');

Route::get('/update',[UserController::class,'update']);

Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete.user');

// Route::get('/insert',[UserController::class,'insert']);

Route::get('/addUser',[UserController::class,'adduser'])->name('add.user');

Route::post('/insert',[UserController::class,'insert'])->name('insert');

Route::get('/update/{id}',[UserController::class,'update'])->name('update');

Route::post('/updatedata/{id}',[UserController::class,'updatedata'])->name('updatedata');