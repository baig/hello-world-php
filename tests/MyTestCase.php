<?php

namespace My;

use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase 
{

    public function testHello() {
        $this->assertSame('hello', 'hello');
    }
  
      /**
     * Source: https://jtreminio.com/2013/03/unit-testing-tutorial-part-3-testing-protected-private-methods-coverage-reports-and-crap/
     * Call protected/private method of a class.
     *
     * @param object|string $object     Instantiated object that we will run method on.
     * @param string        $methodName Method name to call
     * @param array         $parameters Array of parameters to pass into method.
     *
     * @return mixed Method return.
     */
    public function invokeMethod($object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(is_object($object) ? get_class($object) : $object);
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs(is_object($object) ? $object : null, $parameters);
    }

}
