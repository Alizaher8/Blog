<?php

namespace App\Events;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class UserRegister implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */



    public function __construct(public User $user)
    {

       // $userDataArray = $user->toArray(); // Debug statement to check if the $user parameter is being passed correctly
      //  logger('UserRegister event received with user: ' . $user->id);



    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('UserRegisters'),
        ];
    }

    public function broadcastWith(): array
    {
        return [
           'username'=> $this->user->username ,
        ];
    }
}
