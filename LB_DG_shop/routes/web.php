<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PurchaseCompleteController;
use App\Http\Controllers\WarenkorbController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// System
Auth::routes();

// Custom
Route::get('/', fn() => view('welcome'));
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('checkout', CheckoutController::class);
Route::resource('purchase_complete', PurchaseCompleteController::class);
Route::resource('warenkorb', WarenkorbController::class);





