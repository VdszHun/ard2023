<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomersekletController;
use App\Http\Controllers\LegminosegController;
use App\Http\Controllers\TavolsagController;
use App\Http\Controllers\RiasztoController;

Route::get('/', function () {
    return view('welcome');
})->name("fooldal");

Route::get('/homerseklet',[HomersekletController::class,'index'])->name('homerseklet');

Route::get('/legminoseg',[LegminosegController::class,'index'])->name('legminoseg');

Route::get('/tavolsag',[TavolsagController::class,'index'])->name('tavolsag');

Route::get('/riaszto',[RiasztoController::class,'index'])->name('riaszto');