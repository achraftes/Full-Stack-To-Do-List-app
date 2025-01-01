<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\AuthController;




Route::resource('products',ProductController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




        // Route::post('login', [AuthController::class,'login']);

        // Route::group(['middleware'=>'api'],function(){
        //     Route::post('logout', [AuthController::class,'logout']);
        //     Route::post('refresh', [AuthController::class,'refresh']);
        //     Route::post('me', [AuthController::class,'me']);

        // });




