<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\AdminController;







Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/cause', [CauseController::class, 'cause'])->name('cause');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
