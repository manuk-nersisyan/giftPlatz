<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Mail\Email;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Summary of sendmail
     * @param \App\Http\Requests\SendEmailRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendmail(SendEmailRequest $request)
    {
        $email = Contact::query()->first();
        Mail::to($email)->send(new Email($request->all()));
        return back()->with('success', 'Sent Successfully !');
    }
}
