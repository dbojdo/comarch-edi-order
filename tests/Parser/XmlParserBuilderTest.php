<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserBuilderTest extends TestCase
{
    #[Test]
    public function shouldBuildParser(): void
    {
        $builder = new XmlParserBuilder();
        $builder->setCacheDir(sys_get_temp_dir());

        $this->assertInstanceOf(XmlParser::class, $builder->build());
    }

    #[Test]
    public function shouldSupportCustomSerializer()
    {
        /** @var SerializerInterface $serializer */
        $serializer = $this->getMockBuilder(SerializerInterface::class)->getMock();
        $builder = new XmlParserBuilder();
        $builder->setSerializer($serializer);

        $this->assertInstanceOf(XmlParser::class, $builder->build());
    }
}
