<?php

namespace App\Providers;

use App\Models\Header;
use Illuminate\Support\Facades\View;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Facades\TwillAppSettings;
use Illuminate\Support\ServiceProvider;
use A17\Twill\Services\Settings\SettingsGroup;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\View\View as IlluminateView;

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

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('menuLinks')->title('Menu')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('homepage')->label('Homepage')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('projects')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('header')
        );

        View::composer(['site.header',], function (IlluminateView $view) {
            $item = Header::first();

            $view->with('item', $item ?? null);
        });
    }
}
