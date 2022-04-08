<?php
namespace Webit\Comarch\EDI\Order;

use PHPUnit\Framework\TestCase;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class AbstractDocumentMemberTest extends TestCase
{
    /**
     * @param array $arguments
     * @dataProvider arguments
     * @test
     */
    public function testConstructor($arguments)
    {
        $member = $this->newInstance($arguments);

        foreach ($arguments as $key => $value) {
            $getter = 'get'.ucfirst($key);
            $this->assertEquals($value, call_user_func(array($member, $getter)), sprintf('Property "%s" does not match', $key));
        }
        $this->assertTrue(true);
    }

    /**
     * @param array $arguments
     * @dataProvider arguments
     * @test
     */
    public function testSetters($arguments)
    {
        $orderSummary = $this->newInstance();
        foreach ($arguments as $key => $value) {
            $setter = 'set'.ucfirst($key);
            $getter = 'get'.ucfirst($key);

            call_user_func(array($orderSummary, $setter), $value);
            $this->assertEquals($value, call_user_func(array($orderSummary, $getter)), sprintf('Property "%s" does not match', $key));
        }
        $this->assertTrue(true);
    }

    /**
     * @return array
     */
    abstract public function arguments();

    /**
     * @return string
     */
    abstract protected function memberClass();

    /**
     * @param array $arguments
     * @return object
     */
    private function newInstance(array $arguments = array())
    {
        $reflection = new \ReflectionClass($this->memberClass());

        return $reflection->newInstanceArgs($arguments);
    }
}