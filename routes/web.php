<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', [PageController::class, 'main'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'service'])->name('services');
Route::get('/projects', [PageController::class, 'project'])->name('projects');
Route::get('/contacts', [PageController::class, 'contact'])->name('contacts');
Route::get('/singles', [PageController::class, 'single'])->name('singles');

Route::resource('posts', PostController::class);