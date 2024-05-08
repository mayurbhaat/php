<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\m2;



Route::get('/', function () {
    return view('2insert');
});



Route::POST('go',[m2::class,'insert']);

Route::get('2show',[m2::class,'show']);

Route::get('2delete/{id}',[m2::class,'delete1']);

Route::get('2update/{id}',[m2::class,'upshow2']);

ROute::POST('fast',[m2::class,'update1']);

















Route::get('/insert', function () {
    return view('insert');
});


Route::POST('jaja',[my2::class,'insert']);

Route::get('show',[my2::class,'show']);

Route::get('delete/{id}',[my2::class,'delete']);

Route::get('update/{id}',[my2::class,'upshow']);

Route::post('edit',[my2::class,'update']);