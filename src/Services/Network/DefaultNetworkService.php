<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Network;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class DefaultNetworkService implements NetworkService
{

    public function getNetwork(): string
    {
        $networkConnectionStatus = shell_exec("ping -c 1 google.com");
        return (str_contains($networkConnectionStatus, '1 packets transmitted, 1 packets received')) ? 'Connected' : 'Disconnected';
    }
}
