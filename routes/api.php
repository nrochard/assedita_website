<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;

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

Route::post('auth/register', [TokenController::class, 'register']);
Route::post('auth/login', [TokenController::class, 'login']);
Route::middleware('auth:sanctum')->post('auth/logout', [TokenController::class, 'logout']);


Route::middleware('auth:sanctum')->get('/user', [App\Http\Controllers\Api\UserController::class, 'index']);
Route::middleware('auth:sanctum')->post('/user', [App\Http\Controllers\Api\UserController::class, 'update']);
Route::get('/abonnement', [\App\Http\Controllers\CheckoutController::class, 'index']);
Route::post('/abonnement', [App\Http\Controllers\CheckoutController::class, 'store']);
Route::post('/blog', [App\Http\Controllers\Api\PostController::class, 'index']);