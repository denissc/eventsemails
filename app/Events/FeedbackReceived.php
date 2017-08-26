<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;

class FeedbackReceived
{
    use SerializesModels;
    
    /**
     * Feedback message
     * 
     * @var string
     */
    public $feedback;
    
    /**
     * User that receives feedback
     *
     * @var App\User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $feedback)
    {
        $this->user = $user;
        $this->feedback = $feedback;
    }
}
