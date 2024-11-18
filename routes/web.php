<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::middleware('changeLanguage')->group(function () {
    Route::get('/', [PageController::class, 'main'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'service'])->name('services');
    Route::get('/projects', [PageController::class, 'project'])->name('projects');
    Route::get('/contacts', [PageController::class, 'contact'])->name('contacts');
    Route::get('/singles', [PageController::class, 'single'])->name('singles');
    Route::get('/register',[ AuthController::class, 'registerForm'])->name('register');
    Route::get('/login',[ AuthController::class, 'loginForm'])->name('login');
});
Route::middleware(['auth','changeLanguage'])->group(function () {
    Route::resource('posts', PostController::class)->middleware('auth');
    Route::resource('comments' , CommentController::class)->middleware('auth');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/notify', [CommentController::class,'notify'])->name('notify');
    Route::get('/read/notify/{id}', [CommentController::class,'readNotify'])->name('read.notify');
    Route::get('/read/all/notify', [CommentController::class,'readAllNotify'])->name('read.all.notify');
});


Route::post('/handleRegister', [AuthController::class, 'handleRegister'])->name('handleRegister');
Route::post('/handleLogin',[ AuthController::class, 'handleLogin'])->name('handleLogin');
Route::get('/verify', [AuthController::class,'verify'])->name('verify');
Route::get('/language/{locale}', [LanguageController::class,'languageChange'])->name('change.language');
