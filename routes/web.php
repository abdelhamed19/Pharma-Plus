<?php

use App\Http\Controllers\web\categories\CategoryController;
use App\Http\Controllers\web\owners\OwnerAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\drugs\DrugController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','welcome');
Route::view('login','dashboard.auth.login')->name('login');
Route::view('forget-password','dashboard.auth.forget-password');
Route::post('login',[OwnerAuthController::class,'login'])->name('owner.login');

Route::prefix('dashboard')->group(function (){
    Route::view('home','dashboard.index')->name('owner.dashboard');

    // Categories
    Route::get('categories',[CategoryController::class,'index'])->name('all.categories');
    Route::get('category/show/{id}',[CategoryController::class,'show'])->name('show.category');
    Route::get('category/create',[CategoryController::class,'create'])->name('create.category');
    Route::post('category/store',[CategoryController::class,'store'])->name('store.category');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
    Route::put('category/update/{id}',[CategoryController::class,'update'])->name('update.category');
    Route::delete('category/delete/{id}',[CategoryController::class,'destroy'])->name('delete.category');

    // Drugs
    Route::get('drugs',[DrugController::class,'index'])->name('all.drugs');
    Route::get('drug/show/{id}',[DrugController::class,'show'])->name('show.drug');
    Route::get('drug/create',[DrugController::class,'create'])->name('create.drug');
    Route::post('drug/store',[DrugController::class,'store'])->name('store.drug');
    Route::get('drug/edit/{id}',[DrugController::class,'edit'])->name('edit.drug');
    Route::put('drug/update/{id}',[DrugController::class,'update'])->name('update.drug');
    Route::delete('drug/delete/{id}',[DrugController::class,'delete'])->name('delete.drug');
})->middleware('auth:owner');


Route::get('logout',[OwnerAuthController::class,'logout'])->name('owner.logout')->middleware('auth:owner');
