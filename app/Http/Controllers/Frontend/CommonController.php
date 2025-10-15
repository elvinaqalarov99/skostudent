<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function sendMail (Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:5', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:3', 'string'],
            'message' => ['required', 'min:3', 'string'],
        ], [], [
            'full_name' => setting('contact_page_name_label'),
            'email' => setting('contact_page_email_label'),
            'subject' => setting('contact_page_subject_label'),
            'message' => setting('contact_page_message_label'),
        ]);

        Mail::send('vendor.mail.contact', compact('validated'),function ($message) use ($validated) {
            $message->to(setting('contact_form_send_to_email'));
            $message->subject(setting('contact_form_email_subject') . ' - ' . $validated['subject']);
        });

        return redirect()->route('contact')->with(['success' => setting('form_send_success_message')]);
    }
}
