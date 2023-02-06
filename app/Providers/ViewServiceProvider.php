<?php

namespace App\Providers;

use App\View\Composers\CategoryComposer;
use App\View\Composers\SettingComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', SettingComposer::class);
        View::composer(['front.layouts.header','front.layouts.footer'],CategoryComposer::class);
    }
}
