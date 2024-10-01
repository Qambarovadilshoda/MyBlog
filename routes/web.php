<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [PageController::class, 'main'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'service'])->name('services');
Route::get('/projects', [PageController::class, 'project'])->name('projects');
Route::get('/contacts', [PageController::class, 'contact'])->name('contacts');
Route::get('/singles', [PageController::class, 'single'])->name('singles');

Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
]);