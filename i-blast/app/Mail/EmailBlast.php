<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailBlast extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $text, $subject, $email;
    public function __construct($text, $subject, $email)
    {

        $this->subject = $subject;
        $this->text = $text;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no_reply@company.id')->view('template.template1')->with([
            'subjek' => $this->subject,
            'text' => $this->text,
            'email' => $this->email
        ]);
    }
}
