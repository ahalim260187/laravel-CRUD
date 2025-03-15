<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        \Illuminate\Support\Facades\Gate::define('edit-job', function(\App\Models\User $user, \App\Models\JobListing $job){
//            return $job->employer->user->is($user);
//        });
    }
}
