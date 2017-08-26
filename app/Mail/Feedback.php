<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * User feedback
     * @var string
     */
    public $feedback;
    
    /**
     * User that sended feedback
     * @var App\User
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $feedback)
    {
        $this->feedback = $feedback;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.feedback');
    }
}
