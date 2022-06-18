<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contacts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacts)
    {
        //
        $this->contacts = $contacts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $ValideForm)
    {
        $ValideForm->validate([
            'Name'=> 'required',
            'email'=> 'required|email',
            'object'=> 'required',
            'Message'=> 'required',
        ]);

        return $this->subject('Portfolio contact Fomulaire')
            ->view('mail.Mail');

    }
}
