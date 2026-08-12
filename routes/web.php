<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'detail']);
Route::get('/category/Electronics/{slug}', [SubcategoryController::class, 'detail']);
