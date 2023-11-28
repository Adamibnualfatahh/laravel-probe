<?php

declare(strict_types=1);

namespace probe\test;

use Laravel\Probe\Services\Cpu\CpuUsageServiceFactory;
use PHPUnit\Framework\TestCase;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class CpuUsageServiceTest extends TestCase
{
    /** @test */
    public function it_returns_cpu_usage()
    {
        $cpuUsageService = CpuUsageServiceFactory::create();

        $cpuUsage = $cpuUsageService->getCpuUsage();

        $this->assertIsString($cpuUsage);
        $this->assertNotEmpty($cpuUsage);
    }
}
