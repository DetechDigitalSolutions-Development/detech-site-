<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAppointmentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $unreadCount;
    public $todaysCount;
    public $totalCount;
    public $selectedResources;

    /**
     * Create a new message instance.
     */
    public function __construct(Appointment $appointment, $unreadCount, $todaysCount, $totalCount, $selectedResources = null)
    {
        $this->appointment = $appointment;
        $this->unreadCount = $unreadCount;
        $this->todaysCount = $todaysCount;
        $this->totalCount = $totalCount;
        $this->selectedResources = $selectedResources;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = $this->appointment->service === 'Outsource Resource' 
            ? 'New Outsourcing Inquiry: ' . ($this->selectedResources ? count($this->selectedResources) . ' Resources' : 'Multiple Resources')
            : 'New Appointment Request: ' . $this->appointment->service;

        return $this->subject($subject)
            ->view('emails.appointments.new');
    }
}