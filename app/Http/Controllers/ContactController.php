<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $detalles = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];
        
        Mail::to('sergilozano96@gmail.com')->send(new ContactFormMail($detalles));
        
        return redirect()->back()->with('success', 'El correo se ha enviado correctamente.');
    }
}
