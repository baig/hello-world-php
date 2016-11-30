<?php

namespace My;

use \PHPUnit_Framework_TestCase as TestCase;

class ErrorTest extends TestCase
{
    public function testInvalidCredentials()
    {
        $this->assertSame('123', '123');
    }
}