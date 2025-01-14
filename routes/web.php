<?php

use App\Livewire\CheckoutPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\CategoriesPage;
use App\Livewire\HomePage;
use App\Livewire\ProductsPage;
use App\Livewire\CartPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\SuccessPage;
use App\Livewire\CancelPage;
use Illuminate\Support\Facades\Auth;

// Routes for Cart functionality
Route::get('/cart', CartPage::class);


// Public routes
Route::get('/', HomePage::class)->name('home');
Route::get('/categories', CategoriesPage::class)->name('categories');
Route::get('/products', ProductsPage::class)->name('products');
Route::get('/products/{slug}', ProductDetailPage::class)->name('product.detail');

// Authentication routes for guests
Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class)->name('register');
    Route::get('/forgot', ForgotPasswordPage::class)->name('password.request');
    Route::get('/reset', ResetPasswordPage::class)->name('password.reset');
});


// Protected routes for authenticated users
Route::middleware('auth')->group(function() {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

    Route::get('/checkout', CheckoutPage::class)->name('checkout');
    Route::get('/success', SuccessPage::class)->name('checkout.success');
    Route::get('/cancel', CancelPage::class)->name('checkout.cancel');
});
