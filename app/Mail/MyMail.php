<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $email->email = $email;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('InupiCorp@gmail.com')
              ->view('frondend.contentPage.mymail');
    }
}