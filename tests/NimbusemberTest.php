<?php
/**
 * Tests for NimbusEmber
 */

use PHPUnit\Framework\TestCase;
use Nimbusember\Nimbusember;

class NimbusemberTest extends TestCase {
    private Nimbusember $instance;

    protected function setUp(): void {
        $this->instance = new Nimbusember(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nimbusember::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
