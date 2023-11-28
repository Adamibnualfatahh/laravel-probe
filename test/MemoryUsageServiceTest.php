<?php

declare(strict_types=1);

namespace probe\test;

use PHPUnit\Framework\TestCase;
use Laravel\Probe\Services\Memory\DefaultMemoryUsageService;

/**
 * @author Adam Ibnu <adamibnu157@gmail.com>
 */
class MemoryUsageServiceTest extends TestCase
{
   /** @var DefaultMemoryUsageService */
    private DefaultMemoryUsageService $memoryUsageService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->memoryUsageService = new DefaultMemoryUsageService();
    }

    /** @test */
    public function it_returns_memory_usage()
    {
        $memoryUsage = $this->memoryUsageService->getMemoryUsage();

        $this->assertIsString($memoryUsage);
        $this->assertNotEmpty($memoryUsage);
    }
}
