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
        view()->share('company_name', $setting->company_name);
        view()->share('company_address',$setting->street_address);
        view()->share('company_city',$setting->city);
        view()->share('company_territory',$setting->province);
        view()->share('company_postal_code',$setting->postal_code);
        view()->share('company_phone', $setting->phone);
        view()->share('company_email', $setting->email);
        view()->share('hours_of_operation', $hours_of_operation);
    }
}
