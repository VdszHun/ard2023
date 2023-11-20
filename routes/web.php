<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomersekletController;

Route::get('/', function () {
    return view('welcome');
})->name("fooldal");

Route::get('/homerseklet',[HomersekletController::class,'index'])->name('homerseklet');