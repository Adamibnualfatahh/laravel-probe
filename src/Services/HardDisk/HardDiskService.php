<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\HardDisk;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
interface HardDiskService
{
    public function getHardDiskUsage(): string;

}
