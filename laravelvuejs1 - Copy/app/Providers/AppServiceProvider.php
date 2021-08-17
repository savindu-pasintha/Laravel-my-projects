<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\Schema;//Schema::defaultStringLength(191); schema clz ekuse krn nis
    }

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
        //use Illuminate\Support\Facades\Schema; import karann
        Schema::defaultStringLength(191);
    }
}
