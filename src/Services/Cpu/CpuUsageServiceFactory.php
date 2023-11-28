<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Cpu;

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

        switch ($os) {
            case 'LIN':
                return new LinuxCpuUsageService();
                break;
            case 'DAR':
                return new MacCpuUsageService();
                break;
            case 'WIN':
                return new WindowsCpuUsageService();
                break;
            default:
                return null;
                break;
        }
    }

}
