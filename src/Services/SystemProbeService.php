<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

use Laravel\Probe\Services\Cpu\CpuUsageService;
use Laravel\Probe\Services\HardDisk\HardDiskService;
use Laravel\Probe\Services\Memory\MemoryUsageService;
use Laravel\Probe\Services\Network\NetworkService;
use Laravel\Probe\Services\WebServer\WebServerService;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class SystemProbeService
{
    private CpuUsageService $cpuUsageService;
    private MemoryUsageService $memoryUsageService;
    private NetworkService $networkService;
    private WebServerService $webServerService;
    private HardDiskService $hardDiskService;

    public function __construct(
        CpuUsageService         $cpuUsageService,
        MemoryUsageService      $memoryUsageService,
        NetworkService          $networkService,
        WebServerService        $webServerService,
        HardDiskService         $hardDiskService
    ) {
        $this->cpuUsageService =        $cpuUsageService;
        $this->memoryUsageService =     $memoryUsageService;
        $this->networkService =         $networkService;
        $this->webServerService =       $webServerService;
        $this->hardDiskService =        $hardDiskService;
    }

    public function getCpuUsage(): string
    {
        return $this->cpuUsageService->getCpuUsage();
    }

    public function getMemoryUsage(): string
    {
        return $this->memoryUsageService->getMemoryUsage();
    }

    public function getNetworkConnectionStatus(): string
    {
        return $this->networkService->getNetwork();
    }

    public function getWebServerStatus(): string
    {
        return $this->webServerService->getWebServer();
    }

    public function getHardDiskFreeSpace(): string
    {
        return $this->hardDiskService->getHardDiskUsage();
    }
}
