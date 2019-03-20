<?php declare(strict_types=1);

namespace App\Test;

use PHPUnit\Framework\TestCase;
use function App\hello_world_message;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertSame('Hello World', hello_world_message());
    }
}
