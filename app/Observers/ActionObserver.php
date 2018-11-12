<?php

namespace FXM\Observers;

use FXM\Entities\Action;

class ActionObserver
{
    public function creating(Action $action)
    {
        if (!$action->user_id) {
            $action->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the action "created" event.
     *
     * @param  \FXM\Entities\Action  $action
     * @return void
     */
    public function created(Action $action)
    {
        //
    }

    /**
     * Handle the action "updated" event.
     *
     * @param  \FXM\Entities\Action  $action
     * @return void
     */
    public function updated(Action $action)
    {
        //
    }

    /**
     * Handle the action "deleted" event.
     *
     * @param  \FXM\Entities\Action  $action
     * @return void
     */
    public function deleted(Action $action)
    {
        //
    }

    /**
     * Handle the action "restored" event.
     *
     * @param  \FXM\Entities\Action  $action
     * @return void
     */
    public function restored(Action $action)
    {
        //
    }

    /**
     * Handle the action "force deleted" event.
     *
     * @param  \FXM\Entities\Action  $action
     * @return void
     */
    public function forceDeleted(Action $action)
    {
        //
    }
}
