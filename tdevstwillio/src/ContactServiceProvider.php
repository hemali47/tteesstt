<?php

namespace Testing\TestContact;

use Illuminate\Support\ServiceProvider;
use Courier\Console\Commands\InstallCommand;
use Courier\Console\Commands\NetworkCommand;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
        $this->loadTranslationsFrom(__DIR__.'/vendor', 'contact');
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                NetworkCommand::class,
            ]);
        }
    }

    public function register()
    {

    }
}
