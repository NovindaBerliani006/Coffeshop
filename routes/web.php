<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;

// Halaman Utama
Route::get('/', fn() => view('home'));

// Halaman About
Route::get('/about', fn() => view('about'));

// Halaman Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Halaman Menu
Route::get('/menu', function () {
    $menu = Menu::all();
    return view('menu', compact('menu'));
});

// Cart Routes
Route::prefix('cart')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Checkout Routes
Route::prefix('checkout')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/success', [CheckoutController::class, 'success'])->name('checkout.success');
});