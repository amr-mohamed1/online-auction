<?php

namespace App\Providers;

use App\Models\Logs;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Get data from the controller and share it with the navbar view
        View::composer('layout.admin.navbar', function ($view) {
            $data = Logs::all();
            $view->with('data', $data);
        });
    }
}
