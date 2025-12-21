<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;

    /**
     * Create a new message instance.
     */
    public function __construct($applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->subject('New Career Application: ' . $this->applicationData['position'])
            ->view('emails.careers.career_application');
        
        // Attach file if it exists
        if (isset($this->applicationData['cv_path']) && file_exists($this->applicationData['cv_path'])) {
            $mail->attach($this->applicationData['cv_path'], [
                'as' => $this->applicationData['cv_display_name'] ?? $this->applicationData['cv_filename'],
                'mime' => 'application/pdf',
            ]);
        } else {
            // Log warning if file doesn't exist
            Log::warning('CV file not found for attachment', [
                'cv_path' => $this->applicationData['cv_path'] ?? 'Not set',
                'file_exists' => isset($this->applicationData['cv_path']) ? file_exists($this->applicationData['cv_path']) : 'No path'
            ]);
        }
        
        return $mail;
    }
}