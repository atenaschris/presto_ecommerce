<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RevisorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $revisor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($revisor)
    {
        $this->revisor = $revisor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->revisor['email'])->view('mail.revisor_request_mail',[$this->revisor]);
    }
}
