<?php

declare(strict_types=1);

namespace probe\test;

use Laravel\Probe\Services\HardDisk\DefaultHardDiskService;
use PHPUnit\Framework\TestCase;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class HardDiskUsageServiceTest extends TestCase
{
    /** @var DefaultHardDiskService */
    private DefaultHardDiskService $hardDiskService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hardDiskService = new DefaultHardDiskService();
    }

    /** @test */
    public function it_returns_hard_disk_usage()
    {
        $hardDiskUsage = $this->hardDiskService->getHardDiskUsage();

        $this->assertIsString($hardDiskUsage);
        $this->assertNotEmpty($hardDiskUsage);
    }
}
