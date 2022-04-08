<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Webit\Comarch\EDI\Order\Parser\Exception\ParsingException;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserTest extends TestCase
{
    /**
     * @var SerializerInterface|MockObject
     */
    private $serializer;

    /**
     * @var XmlParser
     */
    private $xmlParser;

    protected function setUp(): void
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
     */
    public function shouldThrowExceptionOnDeserialisationError()
    {
        $content = 'xml-content';

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with($content, 'Webit\Comarch\EDI\Order\DocumentOrder', 'xml')
            ->willThrowException(new \Exception('any exception'));
        $this->expectException(ParsingException::class);
        $this->xmlParser->parse($content);
    }
}
