<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BouquetController;
use App\Http\Controllers\PurchaseController;

Route::get('/bouquets', [BouquetController::class, 'index']);
Route::post('/purchases', [PurchaseController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
