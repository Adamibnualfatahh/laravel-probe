<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\Network;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
interface NetworkService
{
    public function getNetwork(): string;
}
