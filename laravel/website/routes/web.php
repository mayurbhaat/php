<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proc;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('insert');
});


Route::POST('gogo',[proc::class,'insert']);

Route::get('show',[proc::class,'show']);

Route::get('delete/{id}',[proc::class,'delete']);

Route::get('update/{id}',[proc::class,'upshow']);

Route::POST('jaja',[proc::class,'update']);