<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationMail;
use App\Mail\ApplicationConfirmation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    /**
     * Display the main careers page
     */
    public function index()
    {
        // return view('careers');
    }

    /**
     * Display job application form
     */
    public function apply($id)
    {
        $career = Career::findOrFail($id);

        return view('pages.careers.apply', [
            'career' => $career,
            'job_title' => $career->job_title,
        ]);
    }

    /**
     * Display job details page
     */
    // In CareerController.php
    public function show($id, $slug = null)
    {
        $career = Career::where('id', $id)
            ->where('is_active', true)
            ->firstOrFail();

        // Get related jobs (same category, exclude current)
        $relatedJobs = Career::where('job_category', $career->job_category)
            ->where('id', '!=', $career->id)
            ->where('is_active', true)
            ->limit(2)
            ->get();

        if ($career->is_active == false || ! $career) {
            abort(404);
        }

        // Optional: Verify slug matches job title
        // $expectedSlug = str_slug($career->job_title);
        // if ($slug && $slug !== $expectedSlug) {
        //     return redirect()->route('careers.show', [
        //         'id' => $id,
        //         'slug' => $expectedSlug
        //     ]);
        // }

        return view('pages.careers.show', [
            'career' => $career,
            'relatedJobs' => $relatedJobs,
        ]);
    }

    /**
     * Admin: List all careers
     */
    public function adminIndex()
    {
        $careers = Career::latest()->paginate(10);

        // return view('admin.careers.index', [
        // 'careers' => $careers
        // ]);
    }

    /**
     * Admin: Show create form
     */
    public function create()
    {
        // return view('admin.careers.create');
    }

    /**
     * Admin: Store new career
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_type' => 'required|in:onsite,hybrid,online',
            'job_location' => 'required|string|max:255',
            'job_category' => 'required|string|max:255',
            'job_content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        Career::create($validated);

        // return redirect()->route('admin.careers.index')
        // ->with('success', 'Job posting created successfully.');
    }

    /**
     * Admin: Show edit form
     */
    public function edit(Career $career)
    {
        // return view('admin.careers.edit', [
        // 'career' => $career
        // ]);
    }

    /**
     * Admin: Update career
     */
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_type' => 'required|in:onsite,hybrid,online',
            'job_location' => 'required|string|max:255',
            'job_category' => 'required|string|max:255',
            'job_content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $career->update($validated);

        // return redirect()->route('admin.careers.index')
        // ->with('success', 'Job posting updated successfully.');
    }

    /**
     * Admin: Delete career
     */
    public function destroy(Career $career)
    {
        $career->delete();

        // return redirect()->route('admin.careers.index')
        // ->with('success', 'Job posting deleted successfully.');
    }

    public function submitApplication(Request $request, $id)
    {
        // Log the incoming request for debugging
        Log::info('Career Application Submission Started', [
            'career_id' => $id,
            'request_data' => $request->except(['cv_resume', '_token']),
            'has_file' => $request->hasFile('cv_resume'),
        ]);

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'Message' => 'required|string|max:2000',
            'cv_resume' => 'required|file|mimes:pdf|max:10240', // 10MB max
        ]);

        if ($validator->fails()) {
            Log::error('Validation Failed', ['errors' => $validator->errors()->all()]);
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Get the career
            $career = Career::findOrFail($id);
            Log::info('Career Found', ['career_title' => $career->job_title]);

            // Handle file upload - store in storage/app/public/career_applications
            $filePath = null;
            $fileName = null;
            
            if ($request->hasFile('cv_resume')) {
                $file = $request->file('cv_resume');
                Log::info('File Details', [
                    'original_name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                ]);
                
                // Generate unique filename
                $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9\.]/', '_', $file->getClientOriginalName());
                
                // Store the file
                $filePath = $file->storeAs('career_applications', $fileName, 'public');
                
                Log::info('File Stored', [
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                    'storage_path' => storage_path('app/public/' . $filePath),
                    'public_path' => public_path('storage/' . $filePath),
                ]);
                
                // Verify file exists
                if (!Storage::disk('public')->exists($filePath)) {
                    throw new \Exception('File was not stored successfully');
                }
            } else {
                Log::error('No file uploaded');
                return back()
                    ->with('error', 'Please upload your CV/Resume')
                    ->withInput();
            }

            // Prepare application data
            $applicationData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'message' => $request->Message,
                'position' => $career->job_title,
                'cv_path' => Storage::disk('public')->path($filePath),
                'cv_filename' => $fileName,
                'cv_display_name' => $request->file('cv_resume')->getClientOriginalName(),
            ];

            Log::info('Application Data Prepared', $applicationData);

            // Get recipient email - use a default if not configured
            $recipientEmail = config('mail.from.address', 'admin@detech.com');
            Log::info('Sending emails to admin and applicant', [
                'admin_email' => $recipientEmail,
                'applicant_email' => $applicationData['email']
            ]);

            // 1. Send notification to admin
            Mail::to($recipientEmail)
                ->send(new CareerApplicationMail($applicationData));
            
            Log::info('Admin notification sent successfully');

            // 2. Prepare career details for confirmation email
            $careerDetails = [
                'job_title' => $career->job_title,
                'job_type' => $career->job_type,
                'job_location' => $career->job_location,
                'job_category' => $career->job_category,
                'company_name' => setting('company_name', 'Detech'),
                'company_email' => setting('company_email', 'careers@example.com'),
                'company_phone' => setting('company_tel_no', $default = null) ,
                'application_date' => now()->format('F j, Y'),
                'application_id' => 'APP' . str_pad($career->id, 3, '0', STR_PAD_LEFT) . '-' . time(),
            ];

            // 3. Send confirmation email to applicant
            Mail::to($applicationData['email'])
                ->send(new ApplicationConfirmation($applicationData, $careerDetails));
            
            Log::info('Application confirmation sent successfully to applicant');

            // Optional: Clean up file after emails are sent
            Storage::disk('public')->delete($filePath);
            Log::info('File deleted from storage');

            return back()->with('success', 'Your application has been submitted successfully! We have sent a confirmation email to ' . $applicationData['email']);

        } catch (\Exception $e) {
            Log::error('Application Submission Error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            $errorMessage = 'An error occurred while submitting your application. ';
            
            // User-friendly error messages
            if (strpos($e->getMessage(), 'mail') !== false) {
                $errorMessage .= 'There was an issue sending emails, but your application has been recorded.';
                // Still save record if needed (you might want to store applications in database)
                // Application::create($request->all() + ['career_id' => $id]);
                return back()
                    ->with('warning', $errorMessage);
            } elseif (strpos($e->getMessage(), 'storage') !== false) {
                $errorMessage .= 'There was an issue uploading your file. Please check the file size and format.';
            } else {
                $errorMessage .= 'Please try again or contact us directly.';
            }
            
            return back()
                ->with('error', $errorMessage)
                ->withInput();
        }
    }
}