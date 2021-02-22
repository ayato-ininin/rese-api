<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ReservedController;

Route::post('/api/register',[RegisterController::class,'post']);
Route::post('/login',[LoginController::class,'post']);
Route::post('/logout',[LogoutController::class,'post']);
Route::get('/user',[UsersController::class,'get']);
Route::apiResource('/shops',ShopsController::class);
Route::apiResource('/reserves',ReservedController::class);
Route::apiResource('/like',LikesController::class);
Route::delete('/like',[LikesController::class,'delete']);


