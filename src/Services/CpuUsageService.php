<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
interface CpuUsageService
{
    public function getCpuUsage(): string;
}
