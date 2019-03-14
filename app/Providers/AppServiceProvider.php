<?php

namespace App\Providers;

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
        view()->share('company_name', 'Sacred Light Healing Centre');
        view()->share('company_address', '188 Bur Oak Avenue');
        view()->share('company_city', 'Markham');
        view()->share('company_territory', 'Ontario');
        view()->share('company_postal_code', 'L6C-2M1');
        view()->share('company_phone', '1-416-907-4697');
        view()->share('company_email', 'info@sacredlighthealing.ca');
        view()->share('hours_of_operation', 'Mn-Fr: 10:00 AM - 10:00 PM');
    }
}
