<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::post('login',[AuthController::class , 'login']);

Route::middleware('jwt.auth')->group(function(){
    Route::get('my_posts',[UserController::class ,'index']);
    Route::post('logout',[AuthController::class,'logout']);
});

?>