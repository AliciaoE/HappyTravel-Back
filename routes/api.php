<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TripsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user-profile', [UserController::class, 'userProfile']); // get('ruta', [UserController::class, 'nombre-de-la-funcion'])
    Route::get('logout', [UserController::class, 'logout']);
    Route::post('store', [TripsController::class, 'store']);
    Route::put('trip/{id}', [TripsController::class, 'update']);
    Route::delete('trip/{id}',[TripsController::class, 'destroy']);
    Route::get('trip/{id}', [TripsController::class, 'getById']);
});
Route::get('/', [TripsController::class, 'index']);
Route::get('search', [TripsController::class,'search']);
Route::get('page', [TripsController::class, 'getPagination']);
