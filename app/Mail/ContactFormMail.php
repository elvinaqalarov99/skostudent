<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->to(setting('contact_form_send_to_email'))
            ->subject(setting('contact_form_email_subject') . ' - ' . $this->data['subject'])
            ->markdown('emails.contact')
            ->with(['data' => $this->data]);
    }
}
