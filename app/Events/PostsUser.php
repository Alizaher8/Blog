<?php

namespace App\Events;
use App\Models\Post;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;



class PostsUser implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $post;
    public $user;

    public function __construct($post,$user)
    {

      $this->post=$post;
      $this->user=$user;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('PostsUsers'),
        ];
    }

    public function broadcastWith(): array
    {
        return [
           'firstname'=> $this->user->firstname,
           'lastname'=>$this->user->lastname,
           'image'=> $this->user->image,
           'content'=>$this->post->content,
           'photo'=>$this->post->photo,
           'created_at'=>$this->post->created_at->diffForhumans(),
        ];
    }
}
