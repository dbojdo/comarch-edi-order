<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserBuilderTest extends TestCase
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
