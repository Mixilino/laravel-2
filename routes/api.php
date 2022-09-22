<?php

use App\Http\Controllers\AutfController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\PrimalacController;
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

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);
Route::get('kurir', [KurirController::class, 'index']);
Route::get('kurir/{kurir}', [KurirController::class, 'show']);
Route::get('primalac', [PrimalacController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('kurir/{kurir}', [KurirController::class, 'update']);
    Route::delete('kurir/{kurir}', [KurirController::class, 'destroy']);
    Route::delete('primalac/{primalac}', [PrimalacController::class, 'destroy']);
    Route::post('logout', [AutfController::class, 'logout']);
});
