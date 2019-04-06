<?php

namespace App\Test;

use App\HelloWorld;
use App\Store;
use PHPUnit\Framework\TestCase;
use function App\hello_world_message;

class HelloWorldTest extends TestCase
{
    public function testMessage()
    {
        Store::initialState(new HelloWorld());
        $this->assertSame('Hello World', hello_world_message());
    }
}
