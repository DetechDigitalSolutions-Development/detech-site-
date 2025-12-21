<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentConfirmation;
use App\Mail\NewAppointmentNotification;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    /**
     * Store a new appointment in the database.
     */
    public function store(Request $request)
    {
        // 1. Validate the form data with better error messages
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            Log::error('Appointment Validation Failed', ['errors' => $validator->errors()->all()]);

            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Log::info('Appointment Submission Started', [
                'service' => $request->service,
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // 2. Create and save the new appointment record
            $appointment = Appointment::create([
                'name' => $request->name,
                'email' => $request->email,
                'service' => $request->service,
                'message' => $request->message,
            ]);

            Log::info('Appointment Created', ['appointment_id' => $appointment->id]);

            // 3. Get statistics for admin notification
            $unreadCount = Appointment::where('read', false)->count();
            $todaysCount = Appointment::whereDate('created_at', today())->count();
            $totalCount = Appointment::count(); // Get total count here

            $selectedResources = null;
            if ($request->service === 'Outsource Resource' && $request->has('selected_resources')) {
                $selectedResources = $request->selected_resources;
            }

            Log::info('Appointment Statistics', [
                'unread' => $unreadCount,
                'today' => $todaysCount,
                'total' => $totalCount,
            ]);

            // 4. Get admin email from config or .env
            $adminEmail = config('mail.from.address', 'admin@detech.com');
            Log::info('Admin Email', ['email' => $adminEmail]);

            // 5. Send notification to admin (pass total count as parameter)
            // In ContactFormController.php - line 68
            Mail::to($adminEmail)
                ->send(new NewAppointmentNotification($appointment, $unreadCount, $todaysCount, $totalCount, $selectedResources));

            Log::info('Admin notification sent successfully');

            // 6. Send auto-reply confirmation to user
            Mail::to($appointment->email)
                ->send(new AppointmentConfirmation($appointment));

            Log::info('User confirmation sent successfully');

            // 7. Set success flash message
            Session::flash('success', 'Your appointment request has been submitted successfully! We have sent a confirmation email');

            // 8. Redirect back
            return back();

        } catch (\Exception $e) {
            Log::error('Appointment Submission Error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            $errorMessage = 'An error occurred while submitting your appointment. ';

            if (strpos($e->getMessage(), 'mail') !== false) {
                $errorMessage .= 'There was an issue sending the confirmation email, but your request has been saved.';
                // Still save the appointment even if email fails
                if (! isset($appointment)) {
                    Appointment::create($request->all());
                }
                Session::flash('warning', $errorMessage);
            } else {
                $errorMessage .= 'Please try again or contact us directly.';

                return back()
                    ->with('error', $errorMessage)
                    ->withInput();
            }

            return back();
        }
    }
}
