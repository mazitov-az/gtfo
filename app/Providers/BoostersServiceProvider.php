<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\BoostersService\BoostersContract;
use App\Services\BoostersService\BoostersService;
use Illuminate\Support\ServiceProvider;

class BoostersServiceProvider extends ServiceProvider
{
    /**
     * @var array<array-key, class-string>
     */
    public $singletons = [
        BoostersContract::class => BoostersService::class
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
