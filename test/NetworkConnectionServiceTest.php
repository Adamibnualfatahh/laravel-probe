<?php

declare(strict_types=1);

namespace probe\test;

use Laravel\Probe\Services\Network\DefaultNetworkService;
use PHPUnit\Framework\TestCase;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class NetworkConnectionServiceTest extends TestCase
{
    /** @var DefaultNetworkService */
    private DefaultNetworkService $networkService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->networkService = new DefaultNetworkService();
    }

    /** @test */
    public function it_returns_network_connection()
    {
        $networkConnection = $this->networkService->getNetwork();

        $this->assertIsString($networkConnection);
        $this->assertNotEmpty($networkConnection);
    }
}
