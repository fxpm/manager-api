<?php

namespace FXM\Observers;

use Webpatser\Uuid\Uuid;
use FXM\Entities\Server;

class ServerObserver
{
    public function creating(Server $server)
    {
        if (!$server->user_id) {
            $server->user_id = auth()->user()->id;
        }

        $server->guid = Uuid::generate()->string;
    }
}
