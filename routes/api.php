<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', function(){
    return ['msg'=> 'ola mundo'];
});


Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'save']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products', [ProductController::class, 'update']);
Route::patch('/products', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::resource('users', UserController::class);










