<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
use App\HoursOfOperation;
use View;
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

        if(!app()-> runningInConsole() ){
            $setting = Setting::first();
            $hours_of_operation = HoursOfOperation::all();
            View::share('company_name', $setting->company_name);
            View::share('company_address', $setting->street_address);
            View::share('company_city', $setting->city);
            View::share('company_territory', $setting->province);
            View::share('company_postal_code', $setting->postal_code);
            View::share('company_phone', $setting->phone);
            View::share('company_email', $setting->email);
            View::share('hours_of_operation', $hours_of_operation);
            View::share('facebook', $setting->facebook);
            View::share('instagram', $setting->instagram);
        }


    }
}
