<?php
namespace Webit\Comarch\EDI\Order;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class AbstractDocumentMemberTestCase extends TestCase
{
    #[DataProvider('arguments')]
    public function testConstructor(array $arguments): void
    {
        $member = $this->newInstance($arguments);

        foreach ($arguments as $key => $value) {
            $getter = 'get'.ucfirst($key);
            $this->assertEquals($value, call_user_func(array($member, $getter)), sprintf('Property "%s" does not match', $key));
        }
        $this->assertTrue(true);
    }

    #[DataProvider('arguments')]
    public function testSetters(array $arguments): void
    {
        $orderSummary = $this->newInstance();
        foreach ($arguments as $key => $value) {
            $setter = 'set'.ucfirst($key);
            $getter = 'get'.ucfirst($key);

            call_user_func(array($orderSummary, $setter), $value);
            $this->assertEquals($value, call_user_func([$orderSummary, $getter]), sprintf('Property "%s" does not match', $key));
        }
        self::assertTrue(true);
    }

//    public static function argumentsProvider(): array
//    {
//        return static::arguments();
//    }

    abstract public static function arguments(): array;

    abstract protected function memberClass(): string;

    private function newInstance(array $arguments = []): object
    {
        $reflection = new \ReflectionClass($this->memberClass());

        return $reflection->newInstanceArgs($arguments);
    }
}
