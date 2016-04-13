<?php

namespace Syahzul\AdminTheme;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $commands = [
        AdminThemeCommand::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

}
