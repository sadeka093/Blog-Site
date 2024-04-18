<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Blog;
use App\Policies\BlogPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Map models to policies here
        Blog::class => BlogPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        // Additional policy or gate registrations can go here
    }
}
