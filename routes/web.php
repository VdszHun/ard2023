<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomersekletController;

Route::get('/', function () {
    return view('welcome');
})->name("fooldal");

Route::get('/homerseklet',[HomersekletController::class,'index'])->name('homerseklet');

Route::get('/legminoseg',[HomersekletController::class,'index'])->name('legminoseg');