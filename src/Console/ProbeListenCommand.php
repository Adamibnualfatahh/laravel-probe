<?php

declare(strict_types=1);

namespace Laravel\Probe\Console;

use Illuminate\Console\Command;
use Laravel\Probe\Services\SystemProbeService;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class ProbeListenCommand extends Command
{
    protected $signature = 'probe:listen';

    protected $description = 'Listen and display system information';

    private SystemProbeService $systemProbeService;

    public function __construct(SystemProbeService $systemProbeService)
    {
        parent::__construct();
        $this->systemProbeService = $systemProbeService;
    }

    public function handle(): void
    {
        $this->info("CPU Usage: " . $this->systemProbeService->getCpuUsage());
        $this->info("Memory Usage: " . $this->systemProbeService->getMemoryUsage());
        $this->info("Network Connection Status: " . $this->systemProbeService->getNetworkConnectionStatus());
        $this->info("Web Server Status: " . $this->systemProbeService->getWebServerStatus());
        $this->info("Hard Disk Free Space: " . $this->systemProbeService->getHardDiskFreeSpace());
    }
}
