<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proc;

Route::get('wel', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/in', function () {
    return view('insert');
});


Route::POST('gogo',[proc::class,'insert']);

Route::get('show',[proc::class,'show']);

Route::get('delete/{id}',[proc::class,'delete']);

Route::get('update/{id}',[proc::class,'upshow']);

Route::POST('jaja',[proc::class,'update']);

Route::get('/',[proc::class,'webshow']);


Route::get('search',[proc::class,'search']);

Auth::routes();

Route::get('/in', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
