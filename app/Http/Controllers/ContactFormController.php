<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('info@khmerrecipes.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
        
    }
}
