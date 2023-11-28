<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class DefaultHardDiskService implements HardDiskService
{

    public function getHardDiskUsage(): string
    {
        $freeSpaceBytes = disk_free_space("/");
        $freeSpaceMB = $freeSpaceBytes / (1024 * 1024);
        return number_format($freeSpaceMB, 2) . ' MB';
    }
}
