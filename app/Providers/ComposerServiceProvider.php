<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Spark\Repositories\NotificationRepository as Notification;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeLatestNotification();
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeLatestNotification()
    {
        view()->composer('layouts.header', function($view)
        {
        $notification = new Notification();
        $notification = $notification->recent(auth()->user())->first();
        
        $view->with(compact('notification'));
        });

    }
}