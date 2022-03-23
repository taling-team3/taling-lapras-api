<?php

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

Route::get('test', [App\Http\Controllers\TestController::class, 'index']);
Route::post('test', [App\Http\Controllers\TestController::class, 'create']);

Route::get('thumbnails', [\App\Http\Controllers\V1\HomeController::class, 'getThumbnails']);
Route::get('categories', [\App\Http\Controllers\V1\HomeController::class, 'getCategories']);
Route::get('taling-recommend', [\App\Http\Controllers\V1\HomeController::class, 'getRecommend']);
Route::get('taling-best', [\App\Http\Controllers\V1\HomeController::class, 'getTalingBest']);
