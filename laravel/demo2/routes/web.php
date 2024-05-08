<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my1;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view('insert');
});

Route::post('go',[my1::class,'insert']);
