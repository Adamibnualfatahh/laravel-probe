<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Memory;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class DefaultMemoryUsageService implements MemoryUsageService
{
    public function getMemoryUsage(): string
    {
        $memoryUsage = memory_get_usage(true);
        $memoryTotal  = memory_get_usage(false);

        return number_format($memoryTotal / 1024 / 1024, 2) . ' MB / ' . number_format($memoryUsage / 1024 / 1024, 2) . ' MB';
    }
}
