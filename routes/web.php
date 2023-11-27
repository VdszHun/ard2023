<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomersekletController;
use App\Http\Controllers\LegminosegController;

Route::get('/', function () {
    return view('welcome');
})->name("fooldal");

Route::get('/homerseklet',[HomersekletController::class,'index'])->name('homerseklet');

Route::get('/legminoseg',[LegminosegController::class,'index'])->name('legminoseg');