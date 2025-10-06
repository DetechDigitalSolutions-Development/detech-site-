<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Session;

class ContactFormController extends Controller
{
    /**
     * Store a new appointment in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Validate the form data.
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Create and save the new appointment record.
        Appointment::create($validatedData);

        // 3. Set a session flash message for success notification.
        Session::flash('success', 'Your request has been sent successfully!');

        // 4. Redirect back to the previous page.
        return back();
    }
}
