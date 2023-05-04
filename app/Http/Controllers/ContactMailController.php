<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $recipient = $request->email;
        Mail::to($recipient)->send(new ContactMail($request));

        return redirect('/contact');
    }
}
