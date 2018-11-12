<?php

namespace FXM\Providers;

use Illuminate\Support\ServiceProvider;
use FXM\Entities\Server;
use FXM\Entities\Command;
use FXM\Observers\ServerObserver;
use FXM\Observers\CommandObserver;
use FXM\Entities\Action;
use FXM\Observers\ActionObserver;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Server::observe(ServerObserver::class);
        Command::observe(CommandObserver::class);
        Action::observe(ActionObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
