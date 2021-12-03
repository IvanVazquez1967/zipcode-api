<?php

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('v1/zipcodes', App\Http\Controllers\Api\V1\ZipcodeController::class)
    ->only(['index', 'show']);

Route::apiResource('v1/cities', App\Http\Controllers\Api\V1\CityController::class)
    ->only(['index', 'show']);

Route::apiResource('v1/states', App\Http\Controllers\Api\V1\StateController::class)
    ->only(['index', 'show']);

Route::apiResource('v1/municipalities', App\Http\Controllers\Api\V1\MunicipalityController::class)
    ->only(['index', 'show']);

Route::apiResource('v1/settlements', App\Http\Controllers\Api\V1\SettlementController::class)
    ->only(['index', 'show']);

Route::apiResource('v1/settlementTypes', App\Http\Controllers\Api\V1\SettlementTypeController::class)
    ->only(['index', 'show']);
