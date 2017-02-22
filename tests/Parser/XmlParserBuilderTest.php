<?php
namespace Tests\Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use Webit\Comarch\EDI\Order\Parser\XmlParserBuilder;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBuildParser()
    {
        $builder = new XmlParserBuilder();
        $builder->setCacheDir(sys_get_temp_dir());

        $this->assertInstanceOf('Webit\Comarch\EDI\Order\Parser\XmlParser', $builder->build());
    }

    /**
     * @test
     */
    public function shouldSupportCustomSerializer()
    {
        /** @var SerializerInterface $serializer */
        $serializer = $this->getMockBuilder('JMS\Serializer\SerializerInterface')->getMock();
        $builder = new XmlParserBuilder();
        $builder->setSerializer($serializer);

        $this->assertInstanceOf('Webit\Comarch\EDI\Order\Parser\XmlParser', $builder->build());
    }
}
