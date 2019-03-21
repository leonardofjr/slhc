<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
use App\HoursOfOperation;
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
        Schema::defaultStringLength(191);
        $setting = Setting::first();
        $hours_of_operation = HoursOfOperation::all();
        view()->share('company_name', $setting->business_name);
        view()->share('company_address', '188 Bur Oak Avenue');
        view()->share('company_city', 'Markham');
        view()->share('company_territory', 'Ontario');
        view()->share('company_postal_code', 'L6C-2M1');
        view()->share('company_phone', $setting->business_phone);
        view()->share('company_email', $setting->business_email);
        view()->share('hours_of_operation', $hours_of_operation);
    }
}
