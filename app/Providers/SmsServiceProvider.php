<?php

namespace App\Providers;

use App\Contracts\Sms\SmsContracts;
use App\Support\Sms\SmsSupport;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SmsContracts::class,SmsSupport::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
