<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\PaymentController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cause', [CauseController::class, 'cause'])->name('cause');

Route::get('/dets/food', [DetailsController::class, 'food'])->name('food');
Route::get('/dets/edu', [DetailsController::class, 'edu'])->name('edu');
Route::get('/dets/volunteer', [DetailsController::class, 'volunteer'])->name('volunteer');
Route::get('/dets/clothes', [DetailsController::class, 'clothes'])->name('clothes');
Route::get('/dets/relief', [DetailsController::class, 'relief'])->name('relief');
Route::get('/dets/money', [DetailsController::class, 'money'])->name('money');

Route::get('/donations', [DonationsController::class, 'index'])->name('donations.index');
Route::get('/donations/create', [DonationsController::class, 'create'])->name('donations.create');
Route::post('/donations', [DonationsController::class, 'store'])->name('donations.store');
Route::get('/donations/{donation}/edit', [DonationsController::class, 'edit'])->name('donations.edit');
Route::put('/donations/{donation}', [DonationsController::class, 'update'])->name('donations.update');
Route::delete('/donations/{donation}', [DonationsController::class, 'destroy'])->name('donations.destroy');
Route::get('/donations/mpesa', [DonationsController::class, 'mpesa'])->name('donations.mpesa');

Route::get('/volunteer/join', [VolunteerController::class, 'Volregister'])->name('Volregister');
Route::post('/volunteer/store', [VolunteerController::class, 'store'])->name('volunteer.store');

Route::post('/payments/response', [PaymentController::class, 'callback'])->withoutMiddleware(['auth', LockScreenMiddleware::class,'auth:sanctum',config('jetstream.auth_session'),'verified',])->name('mpesa.callback');
Route::post('/payments/store', [PaymentController::class, 'storePayment'])->name('payment.store');




/*Route::controller(PaymentController::class)
->prefix('payments')
->as('payments')
->group(function(){
    Route::get('/initiatepush','initiateStkPush')->name('initiatepush');
    Route::post('/stkcallback','stkCallback')->name('stkcallback');
    Route::get('/stkquery','stkQuery')->name('stkquery');
});*/

//Route::post('/chatbot', function (Request $request) {
    //$userMessage = $request->input('message');
    // Process the user message and generate a response
    //$response = "This is a response to: " . $userMessage;
    //return response()->json(['response' => $response]);
//});//




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']
        //return view('dashboard');
    )->name('dashboard');
});
