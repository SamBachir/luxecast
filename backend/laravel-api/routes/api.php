<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TalentController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\PaymentController;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
});

Route::get('/talent/search', [TalentController::class, 'search']);
Route::get('/talent/{id}', [TalentController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/talent/profile', [TalentController::class, 'profile']);
    Route::post('/talent/profile', [TalentController::class, 'storeProfile']);
    Route::post('/talent/portfolio', [TalentController::class, 'uploadPortfolio']);
    Route::post('/bookings', [BookingController::class, 'store']);
    Route::get('/client/bookings', [BookingController::class, 'clientBookings']);

    Route::prefix('payments')->group(function () {
        Route::post('/subscribe', [PaymentController::class, 'subscribe']);
        Route::post('/booking/authorize', [PaymentController::class, 'authorizeBooking']);
        Route::post('/booking/capture', [PaymentController::class, 'captureBooking']);
    });

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/talent/pending', [AdminController::class, 'pendingTalent']);
        Route::post('/talent/{id}/approve', [AdminController::class, 'approveTalent']);
        Route::post('/disputes/{id}/resolve', [AdminController::class, 'resolveDispute']);
        Route::post('/enforcement/{id}/action', [AdminController::class, 'enforceAction']);
    });
});
