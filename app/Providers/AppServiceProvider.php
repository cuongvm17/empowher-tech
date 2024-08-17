<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Pigeon\Domain\Orders\Abstracts\OrderServiceInterface;
use Pigeon\Domain\Orders\Abstracts\PigeonServiceInterface;
use Pigeon\Domain\Orders\Services\OrderService;
use Pigeon\Domain\Orders\Services\PigeonService;
use Pigeon\Infrastructure\Repositories\Order\OrderRepository;
use Pigeon\Infrastructure\Repositories\Order\OrderRepositoryInterface;
use Pigeon\Infrastructure\Repositories\Pigeon\PigeonRepository;
use Pigeon\Infrastructure\Repositories\Pigeon\PigeonRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Repository
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(PigeonRepositoryInterface::class, PigeonRepository::class);


        // Service
        $this->app->bind(OrderServiceInterface::class, OrderService::class);
        $this->app->bind(PigeonServiceInterface::class, PigeonService::class);
    }
}
