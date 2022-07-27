<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('record');
});
Route::get('/inicio', function () {
    return view('welcome');
});