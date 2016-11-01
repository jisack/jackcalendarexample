<?php

namespace Jacklaravel\Calendar;

use Illuminate\Support\ServiceProvider;
use Jacklaravel\Calendar\Commands\JackCalendar;

class CalendarServiceProvider extends ServiceProvider
{
    /**     
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'\resources\views', 'calendar_views');
        $this->publishes([
            __DIR__.'\resources\assets' => public_path('jacklaravel/assets'),
            __DIR__.'\resources\plugins' => public_path('jacklaravel/plugins'),
            __DIR__.'\resources\views' => base_path('resources/views/jacklaravel/calendar'),
            __DIR__.'\config' => config_path(),
        ],'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Jacklaravel\Calendar\CalendarController');
        $this->registerCommands();

    }

    /**
     * Register the commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        $this->registerInstallCommand();
    }

    /**
     * Register the 'eternaltree:install' command.
     *
     * @return void
     */
    protected function registerInstallCommand()
    {
        $this->commands(JackCalendar::class);
    }
}
