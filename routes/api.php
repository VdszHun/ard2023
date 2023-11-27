<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomersekletController;
use App\Http\Controllers\LegminosegController;
use App\Http\Controllers\TavolsagController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/homerseklet/beszuras",[HomersekletController::class, 'create']);
Route::post("/legminoseg/beszuras",[LegminosegController::class, 'legcreate']);
Route::post('/tavolsag/beszuras',[TavolsagController::class, 'tavcreate']);