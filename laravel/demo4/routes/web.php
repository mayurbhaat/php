<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my2;

Route::get('/' , function () {
    return view('insert');
});


Route::POST('jaja',[my2::class,'insert']);

Route::get('show',[my2::class,'show']);

Route::get('delete/{id}',[my2::class,'clean']);

Route::get('update/{id}',[my2::class,'upshow']);

Route::POST('edit',[my2::class,'update']);