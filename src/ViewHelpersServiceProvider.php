<?php

namespace DBlackborough\ViewHelpers;

use Illuminate\Support\ServiceProvider;

class ViewHelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views','laravel-view-helpers');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/laravel-view-helpers')
        ]);
    }

    public function register()
    {
        //
    }
}
