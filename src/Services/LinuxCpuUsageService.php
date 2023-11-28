<?php

declare(strict_types=1);

namespace Laravel\Probe\Services;

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

        $dif = array();
        $dif['user'] = $info2[0] - $info1[0];
        $dif['nice'] = $info2[1] - $info1[1];
        $dif['sys'] = $info2[2] - $info1[2];
        $dif['idle'] = $info2[3] - $info1[3];

        $total = array_sum($dif);

        $cpu = array();
        foreach ($dif as $x => $y) {
            $cpu[$x] = round($y / $total * 100, 1);
        }

        return $cpu['user'] . '%';
    }
}
