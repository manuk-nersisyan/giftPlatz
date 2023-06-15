<?php

namespace App\Providers;

use App\Policies\AboutUsPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ContactPolicy;
use App\Policies\EditorPolicy;
use App\Policies\ProductPolicy;
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

        Gate::define('read.product',  [ProductPolicy::class, 'read']);
        Gate::define('action.product',  [ProductPolicy::class, 'action']);

        Gate::define('read.contact',  [ContactPolicy::class, 'read']);
        Gate::define('action.contact',  [ContactPolicy::class, 'action']);

        Gate::define('read.about-us',  [AboutUsPolicy::class, 'read']);
        Gate::define('action.about-us',  [AboutUsPolicy::class, 'action']);
    }
}
