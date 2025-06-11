<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;




Route::get('/', function () {
    return view('home');
});

Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::put('/users/{user}/role', [UserController::class, 'updateRole'])->name('users.updateRole');

Route::get('/search', [UserController::class, 'index'])->name('search');

Route::get('/admin/add-product', function () {
    return view('admin.add-product');
})->name('admin.add-product');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Optional: registration
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);






require __DIR__.'/auth.php';
