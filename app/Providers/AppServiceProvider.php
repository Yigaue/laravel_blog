<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Schema::defaultStringLength(191);

     view()->composer('layouts.aside', function ($view){

        $view->with('archives', \App\Post::archives());
     });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // \App::bind('App\Billing\Stripe', function () {
        $this->app->bind(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });

        // $stripe = App::make('App\Billing\Stripe');
        // OR DO
        //$stripe = App::make('App\Billing\Stripe');
        // OR DO
        //$stripe = app('App\Billing\Stripe');

    }
}
