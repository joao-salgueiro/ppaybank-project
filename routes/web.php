<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\RetailersDashBoardController;
use App\Http\Controllers\TransactionsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// For Users
Route::get('/dashboard', [DashBoardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// For Retailers
Route::get('/retailers-dashboard', [RetailersDashBoardController::class, 'index'])
    ->middleware(['auth:retailer', 'verified'])
    ->name('retailers.retailer_dashboard');

Route::post('/transfer', [TransactionsController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('transfer.store');

//return view('retailers.retailer_dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
