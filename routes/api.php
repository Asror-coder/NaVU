<?php

use App\Http\Controllers\NodeController;
use App\Http\Controllers\NodeRouteController;
use App\Http\Controllers\ShortestPathController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/node')->group( function() {
    Route::post('/store', [NodeController::class, 'store']);
    Route::get('/all', [NodeController::class, 'index']);
    Route::get('/floor/{floor}', [NodeController::class, 'getFloorNodes']);
    Route::get('/show/{id}', [NodeController::class, 'show']);
    Route::put('/setusers/{id}', [NodeController::class, 'setNumUsers']);
    Route::delete('/delete/{id}', [NodeController::class, 'destroy']);
});

Route::prefix('/route')->group( function() {
    Route::post('/store', [NodeRouteController::class, 'store']);
    Route::get('/node/{id}', [NodeRouteController::class, 'index']);
    Route::delete('/delete', [NodeRouteController::class, 'destroy']);
});

Route::get('/path', [ShortestPathController::class, 'getShortestPath']);
