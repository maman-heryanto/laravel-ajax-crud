<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [CrudController::class, 'index']);
Route::get('/product/read', [CrudController::class, 'read']);
Route::get('/product/create', [CrudController::class, 'create']);
Route::get('/product/store', [CrudController::class, 'store']);
Route::get('/product/edit/{id}', [CrudController::class, 'edit']);
Route::get('/product/update/{id}', [CrudController::class, 'update']);
Route::get('/product/destroy/{id}', [CrudController::class, 'destroy']);