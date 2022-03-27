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
// Route::get('taling-recommend', [\App\Http\Controllers\V1\HomeController::class, 'getRecommend']);
Route::get('taling-recommend', [\App\Http\Controllers\TestController::class, 'getRecommendTest']);
// Route::get('taling-best', [\App\Http\Controllers\V1\HomeController::class, 'getTalingBest']);
// Route::get('taling-best', [\App\Http\Controllers\TestController::class, 'getTalingbestTest']);


Route::get('taling-best', [\App\Http\Controllers\V1\TalentController::class, 'getTalingBest']);
Route::get('recommend-talent', [\App\Http\Controllers\V1\TalentController::class, 'getRecommendTalent']);
Route::get('talent/{id}', [\App\Http\Controllers\V1\TalentController::class, 'getTalentDetail']);
Route::get('talent/id/related', [\App\Http\Controllers\V1\TalentController::class, 'getTalentDetailRelated']);
