<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\reviewController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('product',productController::class);
Route::group(['prefix' => 'products'],function(){
  Route::apiResource('/{product}/review',reviewController::class);
});
