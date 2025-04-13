<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Add events and listeners here if needed
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}
