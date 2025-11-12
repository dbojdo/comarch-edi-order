<?php
namespace Webit\Comarch\EDI\Order\Parser;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Webit\Comarch\EDI\Order\DocumentOrder;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlFileParserTest extends TestCase
{
    private XmlParser&MockObject $xmlParser;

    private XmlFileParser $xmlFileParser;

    protected function setUp(): void
    {
        $mockBuilder = $this->getMockBuilder(XmlParser::class);
        $this->xmlParser = $mockBuilder->disableOriginalConstructor()->getMock();
        $this->xmlFileParser = new XmlFileParser($this->xmlParser);
    }

    #[Test]
    public function shouldUseInnerParser()
    {
        $file = new \SplFileInfo(__DIR__.'/Examples/order-file.xml');

        $expectedDocument = new DocumentOrder();

        $this->xmlParser
            ->expects($this->once())
            ->method('parse')
            ->with(file_get_contents($file->getPathname()))
            ->willReturn($expectedDocument);

        self::assertSame($expectedDocument, $this->xmlFileParser->parse($file));
    }
}
