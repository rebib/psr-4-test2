<?php
declare(strict_types=1);

namespace Rebib\Test;

use PHPUnit\Framework\TestCase;
use Rebib\Example\SayHello;

class SayHelloTest extends TestCase
{

    public function testWorld(): void
    {
        $hello = 'Hello World, Composer! 1.0.1';
        $this->assertEquals($hello, SayHello::world());
    }
}
