<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from($this->data['address'], $this->data['name'])
                ->cc($this->data['address'], $this->data['name'])
                ->bcc($this->data['address'], $this->data['name'])
                ->replyTo($this->data['address'], $this->data['name'])
                ->subject($this->data['subject'])
                ->view('email.contact-mail');
        }
}
