<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Logo;
use App\ContactUs;

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
        $contact = ContactUs::first();
        view()->share(['data1'=>$logo,'contact' =>$contact]);
    }
}
