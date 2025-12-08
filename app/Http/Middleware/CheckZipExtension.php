<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckZipExtension
{
    public function handle(Request $request, Closure $next)
    {
        // Check if ZipArchive extension is available
        if (!extension_loaded('zip') || !class_exists('ZipArchive')) {
            // If in Filament admin panel
            if ($request->is('admin/*') || $request->is('filament/*')) {
                if ($request->ajax()) {
                    return response()->json([
                        'error' => 'ZipArchive extension is not installed on the server.'
                    ], 500);
                }
                
                // For Filament, you might want to show a notification
                session()->flash('error', 'ZipArchive extension is not installed. Please contact your server administrator.');
                
                // Redirect back or to a specific page
                return redirect()->back();
            }
            
            // For regular web routes
            abort(500, 'ZipArchive extension is not installed on the server.');
        }
        
        return $next($request);
    }
}