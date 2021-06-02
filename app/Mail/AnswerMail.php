<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AnswerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $questionAnswer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($questionAnswer)
    {
        //
        $this->questionAnswer = $questionAnswer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('app.subject'))->markdown('email.answer');
    }
}
