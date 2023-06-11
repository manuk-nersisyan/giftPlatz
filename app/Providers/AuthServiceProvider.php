<?php

namespace App\Providers;

use App\Policies\CategoryPolicy;
use App\Policies\EditorPolicy;
use App\Policies\SubcategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('read.editor',  [EditorPolicy::class, 'read']);
        Gate::define('action.editor',  [EditorPolicy::class, 'action']);

        Gate::define('read.category',  [CategoryPolicy::class, 'read']);
        Gate::define('action.category',  [CategoryPolicy::class, 'action']);

        Gate::define('read.subcategory',  [SubcategoryPolicy::class, 'read']);
        Gate::define('action.subcategory',  [SubcategoryPolicy::class, 'action']);
    }
}
