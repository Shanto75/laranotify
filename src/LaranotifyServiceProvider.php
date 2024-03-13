<?php

namespace Shanto75\Laranotify;

use Illuminate\Support\ServiceProvider;

class LaranotifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Laranotify', function($app){
            return new Laranotify();
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laranotify');
    }
}