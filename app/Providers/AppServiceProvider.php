<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Logo;

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
        $logo=Logo::all();
        view()->share('data1',$logo);
    }
}
