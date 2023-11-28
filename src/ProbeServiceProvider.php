<?php

declare(strict_types=1);

namespace Laravel\Probe;

use Illuminate\Support\ServiceProvider;
use Laravel\Probe\Services\CpuUsageService;
use Laravel\Probe\Services\CpuUsageServiceFactory;
use Laravel\Probe\Services\DefaultHardDiskService;
use Laravel\Probe\Services\DefaultMemoryUsageService;
use Laravel\Probe\Services\DefaultNetworkService;
use Laravel\Probe\Services\DefaultWebServerService;
use Laravel\Probe\Services\HardDiskService;
use Laravel\Probe\Services\LinuxCpuUsageService;
use Laravel\Probe\Services\MemoryUsageService;
use Laravel\Probe\Services\NetworkService;
use Laravel\Probe\Services\WebServerService;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class ProbeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CpuUsageService::class, function ($app) {
            return CpuUsageServiceFactory::create();
        });        $this->app->bind(MemoryUsageService::class, DefaultMemoryUsageService::class);
        $this->app->bind(NetworkService::class, DefaultNetworkService::class);
        $this->app->bind(WebServerService::class, DefaultWebServerService::class);
        $this->app->bind(HardDiskService::class, DefaultHardDiskService::class);



        $this->commands([
            Console\ProbeListenCommand::class,
        ]);
    }

    public function boot()
    {
        // ...
    }
}
