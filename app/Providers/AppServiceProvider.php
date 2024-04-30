<?php

namespace App\Providers;

use App\Models\User;
use App\Models\WebsiteSetting;
use View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['*'],function ($view){
            $view->with(
                'websiteSetup',WebsiteSetting::where('status',1)->latest()->first()
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
