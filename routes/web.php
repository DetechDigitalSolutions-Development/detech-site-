<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ProductSite;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\CareerController;
use App\Http\Controllers\SalaryGuideController;
use App\Http\Livewire\CareersComponent;

// Salary Guide Public Page
Route::get('/salary-guide', [SalaryGuideController::class, 'index'])->name('salary-guide');
// Route::get('/', [SalaryGuideController::class, 'index'])->name('home'); // Optional: make it homepage

// If you want a JSON API endpoint
Route::get('/api/salary-guide', [SalaryGuideController::class, 'apiIndex']);
// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// About
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{service}/subservices/{subservice}', [ServiceController::class, 'getSubservice'])->name('services.subservices.show');

// Optional API routes
Route::get('/api/services', [ServiceController::class, 'apiIndex']);
Route::get('/api/services/{id}', [ServiceController::class, 'apiShow']);
// Projects
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Products
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Blog
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

// Teams
Route::get('/teams', [PageController::class, 'teams'])->name('teams');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

// Pages
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactFormController::class, 'store'])->name('appointments.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

// Careers (conditional)
if(setting_bool('career_page_enabled')) {
    Route::get('/careers', function () {
        return view('pages.careers.index');
    })->name('careers');
    
    Route::get('/careers/apply/{id}', [CareerController::class, 'apply'])->name('careers.apply');
    Route::post('/careers/{id}/apply/submit', [CareerController::class, 'submitApplication'])->name('careers.apply.submit');
    Route::get('/careers/job/{id}', [CareerController::class, 'show'])->name('careers.show');
}

// Product Sites
Route::get('/{slug}', function ($slug) {
    $productSite = ProductSite::where('site_slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();
    
    if (!$productSite->extracted_path) {
        abort(404, 'Site files not extracted yet');
    }
    
    $indexFile = $productSite->getIndexFilePath();
    
    if (!$indexFile) {
        abort(404, 'Index file not found');
    }
    
    $filePath = storage_path('app/public/' . $indexFile);
    $mimeType = mime_content_type($filePath);
    
    return Response::file($filePath, [
        'Content-Type' => $mimeType,
    ]);
})->where('slug', '[a-zA-Z0-9\-]+')->name('product.site');

// Salary Guide Public Page
Route::get('/salary-guides', [SalaryGuideController::class, 'index'])->name('salary-guide');
// Route::get('/', [SalaryGuideController::class, 'index'])->name('home'); // Optional: make it homepage

// If you want a JSON API endpoint
Route::get('/api/salary-guide', [SalaryGuideController::class, 'apiIndex']);

// Test routes (optional)
// Route::get('/test', function () {
//     return view('test');
// })->name('test');

Route::get('/test1', function () {
    return view('test1');
})->name('test1');

Route::get('/test2', function () {
    return view('test2');
})->name('test2');

// Debug routes (optional - remove in production)
Route::post('/debug-form', function (Request $request) {
    dd($request->all());
});

Route::get('/test-email', function () {
    try {
        Mail::raw('Test email', function ($message) {
            $message->to(config('mail.from.address'))
                    ->subject('Test Email');
        });
        return 'Email sent!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});