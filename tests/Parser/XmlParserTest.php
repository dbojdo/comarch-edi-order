<?php
namespace Tests\Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use Webit\Comarch\EDI\Order\Parser\XmlParser;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SerializerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $serializer;

    /**
     * @var XmlParser
     */
    private $xmlParser;

    protected function setUp()
    {
        $this->serializer = $this->getMockBuilder('JMS\Serializer\SerializerInterface')->getMock();
        $this->xmlParser = new XmlParser($this->serializer);
    }

    /**
     * @test
     */
    public function shouldParseUsingSerializer()
    {
        $content = 'xml-content';

        $expectedDocument = $this->getMockBuilder('Webit\Comarch\EDI\Order\DocumentOrder')
            ->disableOriginalConstructor()
            ->getMock();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with($content, 'Webit\Comarch\EDI\Order\DocumentOrder', 'xml')
            ->willReturn($expectedDocument);

        $this->assertSame($expectedDocument, $this->xmlParser->parse($content));
    }

    /**
     * @test
     * @expectedException \Webit\Comarch\EDI\Order\Parser\Exception\ParsingException
     */
    public function shouldThrowExceptionOnDeserialisationError()
    {
        $content = 'xml-content';

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with($content, 'Webit\Comarch\EDI\Order\DocumentOrder', 'xml')
            ->willThrowException(new \Exception('any exception'));

        $this->xmlParser->parse($content);
    }
}
