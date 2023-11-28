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
         if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
            $webServerStatus = shell_exec('tasklist /fi "imagename eq php.exe" /nh');
            return (str_contains($webServerStatus, 'php artisan serve')) ? 'Active' : 'Inactive';
         }

         $webServerStatus = shell_exec("ps aux | grep 'php artisan serve' | grep -v grep");
         return (empty($webServerStatus)) ? 'Inactive' : 'Active';
    }
}
