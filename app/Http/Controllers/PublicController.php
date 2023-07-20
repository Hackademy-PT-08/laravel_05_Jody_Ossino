<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function contactSubmit(Request $request){

        $name = $request->name;
        $email = $request->email;

        Mail::to($email)->send(new ContactMail($name,$email));
        return redirect(route ('homepage'))->with('emailSent', 'Abbiamo ricevuto correttamente i suoi dati, Adesso può proseguire con la navigazione.');
    }
}
