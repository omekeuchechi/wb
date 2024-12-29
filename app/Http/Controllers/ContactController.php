<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form data (e.g., save to database, send email, etc.)
        // For example, you can use the Mail facade to send an email:
        Mail::to('omekejoseph97@gmail.com')->send(new \App\Mail\ContactFormSubmitted($request->all()));

        // Redirect the user back to the contact page with a success message
        return redirect()->with('success', 'Your message has been sent successfully.');
    }
}
