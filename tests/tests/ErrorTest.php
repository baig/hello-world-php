<?php

namespace My;

use \PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{
    public function testInvalidCredentials()
    {
        $this->assertSame('123', '123');
    }
}