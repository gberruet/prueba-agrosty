<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mensaje;


class SendMailController extends Controller
{
    public function sendMail(Request $request) {

        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        Mail::to($request->email)->send(new ContactMail());

        $mensaje = new Mensaje();
        $mensaje->fromName = $validData['name'];
        $mensaje->fromEmail = $validData['email'];
        $mensaje->subjectId = $validData['subject'];
        $mensaje->mensaje = $validData['message'];
        $mensaje->date = date("Y-m-d H:i:s");
        $mensaje->spamScore = 5;
        $mensaje->save();

        return redirect('/');

    }
}
