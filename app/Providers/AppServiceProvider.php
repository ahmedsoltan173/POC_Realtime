<?php

namespace App\Providers;


use App\FirebaseNotfication\Services\FirebaseNotficationsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        
        $this->app->bind('FirebaseNotficationsService',function(){
            return new FirebaseNotficationsService;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
