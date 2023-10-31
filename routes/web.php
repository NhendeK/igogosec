<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});


// Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::get('/students', [StudentController::class, 'index'])->name('student.home');

Route::get('/layout', [StudentController::class,'layout'])->name('layout.layout');





