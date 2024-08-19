<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PageController;

// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes pour l'authentification
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Routes pour les produits des freelancers
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// Routes pour les profils des utilisateurs
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/', [ProfileController::class, 'update'])->name('profile.update');
});

// Routes pour les profils des freelancers
Route::prefix('freelancers')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('freelancers.index');
    Route::get('/{id}', [ProfileController::class, 'showFreelancer'])->name('freelancers.show');
    Route::get('/{id}/edit', [ProfileController::class, 'editFreelancer'])->name('freelancers.edit');
    Route::put('/{id}', [ProfileController::class, 'updateFreelancer'])->name('freelancers.update');
});

// Routes pour les avis et évaluations
Route::prefix('reviews')->group(function () {
    Route::get('/', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/{id}', [ReviewController::class, 'show'])->name('reviews.show');
    Route::get('/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('/{id}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});

// Routes pour les pages statiques
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
