<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', [CategoriesController::class, 'index']);
Route::get('categories/show/{id}', [CategoriesController::class, 'show']);
Route::post('categories/store', [CategoriesController::class, 'store']);
Route::post('categories/update/{id}', [CategoriesController::class, 'update']);
Route::get('categories/delete/{id}', [CategoriesController::class, 'delete']);
