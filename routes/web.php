<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});


// Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::get('/students', [StudentController::class, 'index'])->name('students.home');

Route::get('/layout', [StudentController::class,'layout'])->name('layout.layout');

// Route::get('/students',[StudentController::class, 'welcome'])->name('students.welcome');





