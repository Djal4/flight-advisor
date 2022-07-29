<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
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

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('/Cities',[CityController::class,'index']);
    Route::get('/Cities/{number}',[CityController::class,'index']);
    Route::get('/City/{name}',[CityController::class,'show']);
    Route::get('/City/{name}/{number}',[CityController::class,'show']);
    Route::post('/Cities',[CityController::class,'store']);
    Route::post('/Comment',[CommentController::class,'store']);
    Route::put('/Comment/{id}',[CommentController::class,'update']);
    Route::delete('/Comment/{id}',[CommentController::class,'destroy']);  
});

Route::post('/login',[AuthController::class,'authenticate'])->name('login');

