<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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

    }

    /**
     * Bootstrap any application services.
     *
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // LOAD HELPER FILE
        $helperFile = app_path('Helpers/Helper.php');
        if (file_exists($helperFile)) {
            require_once($helperFile);
        } else {
            dd('Helper file not found');
        }

        // SHARE HEADER META TITLE AND DESCRIPTION
        $setting = Setting::orderBy('id','desc')->first();
        View::share('setting',$setting);
    }
}
