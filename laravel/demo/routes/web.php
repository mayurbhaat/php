<?php

use Illuminate\Support\Facades\Route;
use App\http\Controller\my1;

Route::get('/', function () {
    return view('welcome');
});
