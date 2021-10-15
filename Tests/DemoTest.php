<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use function print_r;

class DemoTest extends TestCase {

    protected function setUp(): void
    {
        print_r("ok");
    }
    public static function setUpBeforeClass(): void
    {
        //print_r("setup before classe");
    }
    public function testgetjour()
    {
        $this->assertTrue(true);
    }
    public function testgetmois()
    {
        $this->assertTrue(true);
    }
}