<?php

namespace App\Listeners;

use App\Events\FeedbackReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Feedback;
use Mail;

class SendFeedbackNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FeedbackReceived  $event
     * @return void
     */
    public function handle(FeedbackReceived $event)
    {
        Mail::to(config('mail.from.address'))->send(new Feedback($event->user, $event->feedback));
    }
}
