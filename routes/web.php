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
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\ProductSite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


use App\Http\Controllers\CareerController;
use App\Http\Livewire\CareersComponent;

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

if(setting_bool('career_page_enabled')){
    // Careers Page Route (Main page with Livewire component)
    Route::get('/careers', function () {
        return view('pages.careers.index');
    })->name('careers');

    // // Or if you prefer using a controller:
    // Route::get('/careers', [CareerController::class, 'index'])->name('careers');

    // // Apply for a job route
    Route::get('/careers/apply/{id}', [CareerController::class, 'apply'])->name('careers.apply');

    Route::post('/careers/{id}/apply/submit', [CareerController::class, 'submitApplication'])->name('careers.apply.submit');

    // // Job details page (optional)
    Route::get('/careers/job/{id}', [CareerController::class, 'show'])->name('careers.show');
}

Route::get('/{slug}', function ($slug) {
    $productSite = ProductSite::where('site_slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();
    
    if (!$productSite->extracted_path) {
        abort(404, 'Site files not extracted yet');
    }
    
    // Get index file
    $indexFile = $productSite->getIndexFilePath();
    
    if (!$indexFile) {
        abort(404, 'Index file not found');
    }
    
    // Serve the file
    $filePath = storage_path('app/public/' . $indexFile);
    $mimeType = mime_content_type($filePath);
    
    return Response::file($filePath, [
        'Content-Type' => $mimeType,
    ]);
})->where('slug', '[a-zA-Z0-9\-]+')->name('product.site');

Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/test1', function () {
    return view('test1');
})->name('test1');
Route::get('/test2', function () {
    return view('test2');
})->name('test2');

Route::post('/debug-form', function (Request $request) {
    dd([
        'all_data' => $request->all(),
        'has_file' => $request->hasFile('cv_resume'),
        'file_info' => $request->file('cv_resume') ? [
            'name' => $request->file('cv_resume')->getClientOriginalName(),
            'size' => $request->file('cv_resume')->getSize(),
            'mime' => $request->file('cv_resume')->getMimeType(),
        ] : null,
        'headers' => $request->headers->all(),
    ]);
});

Route::get('/test-email', function () {
    try {
        Mail::raw('Test email from Laravel', function ($message) {
            $message->to(config('mail.from.address', 'test@example.com'))
                    ->subject('Test Email');
        });
        
        return 'Email sent successfully! Check your inbox.';
    } catch (\Exception $e) {
        return 'Email error: ' . $e->getMessage();
    }
});

Route::post('/test-upload', function (Request $request) {
    $request->validate([
        'cv_resume' => 'required|file|mimes:pdf|max:10240',
    ]);
    
    $file = $request->file('cv_resume');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $path = $file->storeAs('test_uploads', $fileName, 'public');
    
    return response()->json([
        'success' => true,
        'path' => $path,
        'full_path' => storage_path('app/public/' . $path),
        'url' => asset('storage/' . $path),
    ]);
});