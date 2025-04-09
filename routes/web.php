<?php

use App\Http\Controllers\chart;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chart',[chart::class,'index']);