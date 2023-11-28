<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Cpu;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class LinuxCpuUsageService implements CpuUsageService
{

    public function getCpuUsage(): string
    {
        $stat1 = file('/proc/stat');
        sleep(1);
        $stat2 = file('/proc/stat');

        $info1 = explode(" ", preg_replace("!cpu +!", "", $stat1[0]));
        $info2 = explode(" ", preg_replace("!cpu +!", "", $stat2[0]));

        $dif = [
            'user' => $info2[0] - $info1[0],
            'nice' => $info2[1] - $info1[1],
            'sys' => $info2[2] - $info1[2],
            'idle' => $info2[3] - $info1[3],
        ];

        $total = array_sum($dif);

        $cpuUsage = [];
        foreach ($dif as $category => $value) {
            $cpuUsage[$category] = round($value / $total * 100, 1);
        }

        return $cpuUsage['user'] . '%';
    }
}
