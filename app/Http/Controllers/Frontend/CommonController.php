<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class CommonController extends Controller
{
    public function sendMail(ContactFormRequest $request)
    {
        $validated = $request->validated();

        Mail::queue(new ContactFormMail($validated));

        return redirect()
            ->route('contact')
            ->with(['success' => setting('form_send_success_message')]);
    }
}
