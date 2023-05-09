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
        //$recipient = $request->email;
        $recipient = env('MAIL_FROM_ADDRESS',false);
        $sender = $request->email;
        $contactmail = new ContactMail($request);
        if ($recipient) {
            Mail::to($recipient)->send($contactmail);
        }

        return redirect('/contact');
    }
}
