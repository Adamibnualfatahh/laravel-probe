<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class WindowsCpuUsageService implements CpuUsageService
{

    public function getCpuUsage(): string
    {
        $process = @popen('wmic cpu get loadpercentage', 'rb');

        if ($process !== false) {
            fgets($process); // Skip header
            $cpuUsage = (int)fgets($process);
            pclose($process);

            return $cpuUsage . '%';
        }

        return 'Unable to determine CPU usage on Windows.';
    }
}
