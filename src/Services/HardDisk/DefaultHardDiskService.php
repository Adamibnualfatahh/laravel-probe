<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\HardDisk;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class DefaultHardDiskService implements HardDiskService
{

    public function getHardDiskUsage(): string
    {
        $freeSpace = disk_free_space("/") / (1024 * 1024);
        return number_format($freeSpace, 2) . ' MB';
    }
}
