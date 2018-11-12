<?php

namespace FXM\Events\Commands;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use FXM\Entities\Command;
use FXM\Entities\Server;
use CloudCreativity\LaravelJsonApi\Broadcasting\BroadcastsData;

class CommandCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $command;
    public $server;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Command $command)
    {
        $this->command = $command;
        $this->server = $command->server;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel("Server.{$this->server->guid}");
    }
}
