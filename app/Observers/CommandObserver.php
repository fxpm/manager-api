<?php

namespace FXM\Observers;

use FXM\Entities\Command;
use FXM\Events\Commands\CommandCreated;
use Illuminate\Support\Facades\Log;

class CommandObserver
{
    public function creating(Command $command)
    {
        if (!$command->user_id) {
            $command->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the command "created" event.
     *
     * @param  \FXM\Entities\Command  $command
     * @return void
     */
    public function created(Command $command)
    {
        Log::info("Sending Command {$command->id} to {$command->server->guid}");
        event(new CommandCreated($command));
    }

    /**
     * Handle the command "updated" event.
     *
     * @param  \FXM\Entities\Command  $command
     * @return void
     */
    public function updated(Command $command)
    {
        //
    }

    /**
     * Handle the command "deleted" event.
     *
     * @param  \FXM\Entities\Command  $command
     * @return void
     */
    public function deleted(Command $command)
    {
        //
    }

    /**
     * Handle the command "restored" event.
     *
     * @param  \FXM\Entities\Command  $command
     * @return void
     */
    public function restored(Command $command)
    {
        //
    }

    /**
     * Handle the command "force deleted" event.
     *
     * @param  \FXM\Entities\Command  $command
     * @return void
     */
    public function forceDeleted(Command $command)
    {
        //
    }
}
