<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;
    public $careerDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($applicationData, $careerDetails = null)
    {
        $this->applicationData = $applicationData;
        $this->careerDetails = $careerDetails;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Application Confirmation: ' . $this->applicationData['position'])
            ->view('emails.careers.application_confirmation');
    }
}