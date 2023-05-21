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

Route::group(['namespace' => 'Schedule', 'prefix' => 'schedules'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
//    Route::patch('/{schedule}', 'UpdateController');
    Route::delete('/{schedule}', 'DestroyController');
});

Route::group(['namespace' => 'Train', 'prefix' => 'trains'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::patch('/{train}', 'UpdateController');
    Route::delete('/{train}', 'DestroyController');
});

Route::group(['namespace' => 'Locality', 'prefix' => 'localities'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::patch('/{locality}', 'UpdateController');
    Route::delete('/{locality}', 'DestroyController');
});

Route::group(['namespace' => 'Information', 'prefix' => 'information'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::patch('/{information}', 'UpdateController');
    Route::delete('/{information}', 'DestroyController');
});


