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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// все защищенные роуты писать сюда
// тест коммит
Route::group(['middleware'=>'auth:sanctum'], function (){
    //пример 1
    // писать как [class , 'method']
    Route::get('/user', function () {
        return 1121;
    });
});
