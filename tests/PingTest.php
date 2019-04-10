<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use function App\ping;

class PingTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertSame('pong', ping());
    }
}
