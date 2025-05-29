<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Roots\Acorn\Sage\SageServiceProvider;

use function Roots\view;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
