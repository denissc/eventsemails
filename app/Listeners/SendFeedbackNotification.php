<?php

namespace App\Listeners;

use App\Events\FeedbackReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Feedback;

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
        Mail::to($event->user)->send(new Feedback($event->user));
    }
}
