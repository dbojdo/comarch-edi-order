<?php
namespace Tests\Webit\Comarch\EDI\Order\Parser;

use Webit\Comarch\EDI\Order\Parser\XmlFileParser;
use Webit\Comarch\EDI\Order\Parser\XmlParser;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlFileParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|XmlParser
     */
    private $xmlParser;

    /**
     * @var XmlFileParser
     */
    private $xmlFileParser;

    protected function setUp()
    {
        $mockBuilder = $this->getMockBuilder('Webit\Comarch\EDI\Order\Parser\XmlParser');
        $this->xmlParser = $mockBuilder->disableOriginalConstructor()->getMock();
        $this->xmlFileParser = new XmlFileParser($this->xmlParser);
    }

    /**
     * @test
     */
    public function shouldUseInnerParser()
    {
        $file = new \SplFileInfo(__DIR__.'/Examples/order-file.xml');

        $expectedDocument = $this->getMockBuilder('Webit\Comarch\EDI\Order\DocumentOrder')
                                    ->disableOriginalConstructor()
                                    ->getMock();

        $this->xmlParser
            ->expects($this->once())
            ->method('parse')
            ->with(file_get_contents($file->getPathname()))
            ->willReturn($expectedDocument);

        $this->assertSame($expectedDocument, $this->xmlFileParser->parse($file));
    }
}
