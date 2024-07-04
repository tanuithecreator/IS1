<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationsController;






Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/cause', [CauseController::class, 'cause'])->name('cause');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/dets/food', [DetailsController::class, 'food'])->name('food');
Route::get('/dets/edu', [DetailsController::class, 'edu'])->name('edu');
Route::get('/dets/volunteer', [DetailsController::class, 'volunteer'])->name('volunteer');
Route::get('/dets/clothes', [DetailsController::class, 'clothes'])->name('clothes');
Route::get('/dets/relief', [DetailsController::class, 'relief'])->name('relief');




Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');






Route::get('/volunteer/join', [VolunteerController::class, 'Volregister'])->name('Volregister');


Route::post('/volunteer/store', [VolunteerController::class, 'store'])->name('volunteer.store');



Route::controller(PaymentController::class)
->prefix('payments')
->as('payments')
->group(function(){
    Route::get('/initiatepush','initiateStkPush')->name('initiatepush');
    Route::get('/stkcallback','stkCallback')->name('stkcallback');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'), 
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified', 'admin']);

Route::resource('category', CategoryController::class);
Route::resource('donation', DonationsController::class);
