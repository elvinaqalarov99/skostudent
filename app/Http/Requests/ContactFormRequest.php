<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'min:3'],
            'message' => ['required', 'string', 'min:3'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => setting('contact_page_name_label'),
            'email' => setting('contact_page_email_label'),
            'subject' => setting('contact_page_subject_label'),
            'message' => setting('contact_page_message_label'),
        ];
    }
}
