<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use Illuminate\Support\ServiceProvider;
use A17\Twill\View\Components\Navigation\NavigationLink;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')
        );
    }
}
