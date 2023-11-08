<?php

namespace App\Providers;

use App\Interface\adminInterface\AdminAuthRepositoryInterface;
use App\Interface\adminInterface\UserRepositoryInterface;
use App\Interface\userInterface\ContactUsRepositoryInterface;
use App\Repositories\adminRepositories\AdminAuthRepository;
use App\Repositories\adminRepositories\UserRepository;
use App\Repositories\userRepositories\ContactUsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
