<?php

declare(strict_types=1);

namespace Laravel\Probe\Services\WebServer;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class DefaultWebServerService implements WebServerService
{
    public function getWebServer(): string
    {
       $webServerStatus = shell_exec("ps aux | grep 'php artisan serve' | grep -v grep");
        return (empty($webServerStatus)) ? 'Inactive' : 'Active';
    }
}
