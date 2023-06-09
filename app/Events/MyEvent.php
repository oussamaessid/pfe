<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     * 
     */
    /* public function broadcastOn()
    {
        return new PrivateChannel('my-channel');
    }*/
    public function broadcastOn()
    {
        // Log::info('MyEvent broadcasted on App.User.16');
        $id = 16;
        return new Channel('App.User.' . $id);
    }
    /*public function broadcastAs()
    {
        return 'my-event';
    }

    /* public function broadcastToOthers()
    {
        return true;
    }*/
    public function broadcastWith()
    {
        return [
            'achat' => $this->data,
        ];
    }
}
