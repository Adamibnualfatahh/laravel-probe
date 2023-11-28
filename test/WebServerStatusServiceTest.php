<?php

declare(strict_types=1);

namespace probe\test;

use Laravel\Probe\Services\WebServer\DefaultWebServerService;
use PHPUnit\Framework\TestCase;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class WebServerStatusServiceTest extends TestCase
{
    /** @var DefaultWebServerService */
    private DefaultWebServerService $webServerService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->webServerService = new DefaultWebServerService();
    }

    /** @test */
    public function it_returns_web_server_status()
    {
        $webServerStatus = $this->webServerService->getWebServer();

        $this->assertIsString($webServerStatus);
        $this->assertNotEmpty($webServerStatus);
    }
}
