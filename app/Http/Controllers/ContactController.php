<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }


    public function submitForm(Request $request)
    {
        // Custom validation messages
        $messages = [
            'name.required' => 'We need to know your first name!',
            'email.required' => 'Don\'t forget your email address!',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'A message is required to submit the form.',
        ];
    
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:5000', // Updated 'text' to 'string'
        ], $messages);
    
        // Send the email
        Mail::to('hasnainalikhan2001@gmail.com')->send(new ContactMail(
            $request->name , // Full name
            $request->email,
            $request->subject,
            $request->message
        ));
    
        // Redirect back with success message
        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
    
  
  
}
