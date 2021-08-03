<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::post('getStockDetails', [ApiController::class, 'getStockDetails']);
    Route::post('getStockDetailsbyId', [ApiController::class, 'getStockDetailsbyId']);
});