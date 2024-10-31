<?php

use App\Http\Controllers\BioskopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/bioskop', BioskopController::class);

Route::get('/bioskop',[BioskopController::class,'index']);
Route::get('/bioskop',[BioskopController::class,'show']);
Route::post('/bioskop',[BioskopController::class,'store']);
