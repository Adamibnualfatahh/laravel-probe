<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Cpu;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class MacCpuUsageService implements CpuUsageService
{

    public function getCpuUsage(): string
    {
        $cpuUsage = shell_exec("top -l 1 | grep 'CPU usage' | awk '{print $3}'");

        return trim($cpuUsage) . '%';
    }
}
