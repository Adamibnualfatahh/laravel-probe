<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\WebServer;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
interface WebServerService
{
    public function getWebServer(): string;
}
