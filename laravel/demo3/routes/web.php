<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my2;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('insert');
});




Route::post('go',[my2::class,'insert']);

Route::get('show',[my2::class,'show']);

Route::get('delete/(id)',[my2::class,'clean']);

