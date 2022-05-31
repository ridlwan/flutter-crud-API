<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;

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

Route::get('/products', [ProductAPIController::class, 'index']);
Route::post('/products', [ProductAPIController::class, 'store']);
Route::get('/products/{id}', [ProductAPIController::class, 'show']);
Route::put('/products/{id}', [ProductAPIController::class, 'update']);
Route::delete('/products/{id}', [ProductAPIController::class, 'destroy']);
