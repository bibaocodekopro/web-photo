<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[adminController::class,'view_category']);

Route::post('/add_category',[adminController::class,'add_category']);

Route::get('/delete_category/{id}',[adminController::class,'delete_category']);

Route::get('/view_product',[adminController::class,'view_product']);

Route::post('/add_product',[adminController::class,'add_product']);

Route::get('/delete_product/{id}',[adminController::class,'delete_product']);

Route::get('/add_product_view',[adminController::class,'add_product_view']);

Route::get('/edit_product/{id}',[adminController::class,'edit_product']);

Route::post('/save_edit/{id}',[adminController::class,'save_edit']);