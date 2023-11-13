<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApiController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){

        Route::get('list/{id?}', [DeviceController::class, 'list']);

        Route::post('add', [DeviceController::class, 'add']);
        Route::put('update', [DeviceController::class, 'update']);
        Route::delete('delete/{id}', [DeviceController::class, 'delete']);
        Route::get('search/{name}', [DeviceController::class, 'search']);
    });
Route::post('/login',[UserController::class,'index']);