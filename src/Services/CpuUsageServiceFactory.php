<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class CpuUsageServiceFactory
{
    /**
     * @return CpuUsageService|null
     */
    public static function create(): CpuUsageService|null
    {
         $os = strtoupper(substr(PHP_OS, 0, 3));

        if ($os === 'LIN') {
            return new LinuxCpuUsageService();
        } elseif ($os === 'DAR') {
            return new MacCpuUsageService();
        } elseif ($os === 'WIN') {
            return new WindowsCpuUsageService();
        } else {
            return null;
        }
    }

}
