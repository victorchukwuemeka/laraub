<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


// The route that the button calls to initialize payment
//Route::post('/paystack/initialize', [PaymentController::class, 'initialize'])->name('pay');

// The callback url after a payment
Route::get('/paystack/callback', [PaymentController::class, 'callback'])->name('callback');




// Route to display the payment form
Route::get('/ads/payment/{id}', [PaymentController::class, 'showPaymentForm'])->name('ads.payment');


// Route to handle the payment form submission
Route::post('/ads/payment/{id}', [PaymentController::class, 'processPayment'])->name('ads.payment.process');

