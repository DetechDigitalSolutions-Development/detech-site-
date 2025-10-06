<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route::get('/services', [PageController::class, 'services'])->name('services');
// Route::get('/services/1', [PageController::class, 'services_show'])->name('services.show');

// Service routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{service}/subservices/{subservice}', [ServiceController::class, 'getSubservice'])->name('services.subservices.show');

// Optional API routes
Route::get('/api/services', [ServiceController::class, 'apiIndex']);
Route::get('/api/services/{id}', [ServiceController::class, 'apiShow']);

Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{product}', [productController::class, 'show'])->name('products.show');

Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/teams', [PageController::class, 'teams'])->name('teams');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactFormController::class, 'store'])->name('appointments.store');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
