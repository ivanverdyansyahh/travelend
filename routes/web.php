<?php

use App\Http\Controllers\AdminFrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Livewire\Destination;
use App\Http\Livewire\Destinations;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use Illuminate\Support\Facades\Route;


Route::redirect('/admin', '/admin/dashboard');
Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::prefix('/admin')->group(function() {

        Route::controller(AdminFrontendController::class)->group(function() {
            Route::get('/dashboard', 'dashboardView');
            Route::get('/destinations', 'destinationsView');
            Route::get('/categories', 'categoriesView');
            Route::get('/orders', 'ordersView');
        });
    
    });

    Route::resource('/destinations', DestinationController::class);
    Route::get('/destinations/delete/{id}', [DestinationController::class, 'delete']);
    Route::delete('/delete-image/{id}', [DestinationController::class, 'deleteImage']);

    Route::resource('/categories', CategoryController::class);
    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete']);
});


Route::middleware('guest')->group(function() {
    Route::get('/signup', Signup::class);
    Route::get('/login', Login::class);

    Route::controller(AuthController::class)->group(function() {
        Route::post('/signup', 'store');
        Route::post('/login', 'login')->name('login');
    });
    
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function() {    
    Route::get('/', Home::class)->name('home');
    Route::get('/destinations/{category_slug}/{destination_slug}', Destination::class);
    Route::get('/destinations', Destinations::class);
    
    Route::controller(ReviewController::class)->group(function() {
        Route::post('/reviews', 'store');
    });

    Route::resource('/orders', OrderController::class);
});