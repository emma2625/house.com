<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, "index"])->name('homepage');

Route::get('contact', [PageController::class, "getContact"])->name('contact.page');
Route::post('contact', [PageController::class, "sendMessage"])->name('contact.send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::patch('/categories/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');


Route::resource('admin/properties', PropertyController::class)->except(['show'])->middleware(['auth', 'permit.admin']);