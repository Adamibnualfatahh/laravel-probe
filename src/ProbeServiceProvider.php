<?php

declare(strict_types=1);

namespace Laravel\Probe;

use Illuminate\Support\ServiceProvider;
use Laravel\Probe\Console\ProbeListenCommand;
use Laravel\Probe\Services\Cpu\CpuUsageService;
use Laravel\Probe\Services\Cpu\CpuUsageServiceFactory;
use Laravel\Probe\Services\HardDisk\DefaultHardDiskService;
use Laravel\Probe\Services\HardDisk\HardDiskService;
use Laravel\Probe\Services\Memory\DefaultMemoryUsageService;
use Laravel\Probe\Services\Memory\MemoryUsageService;
use Laravel\Probe\Services\Network\DefaultNetworkService;
use Laravel\Probe\Services\Network\NetworkService;
use Laravel\Probe\Services\WebServer\DefaultWebServerService;
use Laravel\Probe\Services\WebServer\WebServerService;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class ProbeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CpuUsageService::class, fn() => CpuUsageServiceFactory::create());
        $this->app->bind(MemoryUsageService::class, DefaultMemoryUsageService::class);
        $this->app->bind(NetworkService::class, DefaultNetworkService::class);
        $this->app->bind(WebServerService::class, DefaultWebServerService::class);
        $this->app->bind(HardDiskService::class, DefaultHardDiskService::class);


        $this->commands([
            ProbeListenCommand::class,
        ]);
    }
}
