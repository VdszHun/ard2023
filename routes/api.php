<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomersekletController;
use App\Http\Controllers\LegminosegController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/homerseklet/beszuras",[HomersekletController::class, 'create']);
Route::post("/legminoseg/beszuras",[LegminosegController::class, 'legcreate']);