<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Webit\Comarch\EDI\Order\DocumentOrder;
use Webit\Comarch\EDI\Order\Parser\Exception\ParsingException;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserTest extends TestCase
{
    private SerializerInterface&MockObject $serializer;

    private XmlParser $xmlParser;

    protected function setUp(): void
    {
        $this->serializer = $this->getMockBuilder(SerializerInterface::class)->getMock();
        $this->xmlParser = new XmlParser($this->serializer);
    }

    #[Test]
    public function shouldParseUsingSerializer(): void
    {
        $content = 'xml-content';

        $expectedDocument = new DocumentOrder();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with($content, DocumentOrder::class, 'xml')
            ->willReturn($expectedDocument);

        $this->assertSame($expectedDocument, $this->xmlParser->parse($content));
    }

    #[Test]
    public function shouldThrowExceptionOnDeserialisationError(): void
    {
        $content = 'xml-content';

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with($content, DocumentOrder::class, 'xml')
            ->willThrowException(new \Exception('any exception'));
        $this->expectException(ParsingException::class);
        $this->xmlParser->parse($content);
    }
}
