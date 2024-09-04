<?php

use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CartController;
use App\Http\Controllers\Api\users\AuthController;
use App\Http\Controllers\Api\drugs\DrugsController;
use App\Http\Controllers\Api\categories\CategoryController;

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

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::middleware('auth:sanctum')->group(function (){
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('cart',[CartController::class,'index']);

    Route::delete('cart/{id}',[CartController::class,'delete']);
    Route::post('cart',[CartController::class,'store']);
});
Route::get('all-drugs',[DrugsController::class,'allDrugs']);
Route::get('drug/{id}',[DrugsController::class,'drug']);

Route::get('all-categories',[CategoryController::class,'allCategories']);
Route::get('category/{id}',[CategoryController::class,'category']);


