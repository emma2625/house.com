<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, "index"])->name('homepage');

Route::get('contact', [PageController::class, "getContact"])->name('contact.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('admin.category.store');