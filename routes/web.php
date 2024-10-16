<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [PageController::class, 'main'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'service'])->name('services');
Route::get('/projects', [PageController::class, 'project'])->name('projects');
Route::get('/contacts', [PageController::class, 'contact'])->name('contacts');
Route::get('/singles', [PageController::class, 'single'])->name('singles');

Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('comments' , CommentController::class);

Route::get('/register',[ AuthController::class, 'registerForm'])->name('register');
Route::post('/handleRegister', [AuthController::class, 'handleRegister'])->name('handleRegister');
Route::get('/login',[ AuthController::class, 'loginForm'])->name('login');
Route::post('/handleLogin',[ AuthController::class, 'handleLogin'])->name('handleLogin');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
