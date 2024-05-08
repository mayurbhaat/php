<?php
 
use Illuminate\Support\Facades\Route;

use App\Http\controller\myc; 
Route::get('/', function () {
    return view('welcome');
});
