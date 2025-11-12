<?php
namespace Webit\Comarch\EDI\Order\Parser;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Webit\Comarch\EDI\Order\DocumentOrder;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserIntegrationTest extends TestCase
{
    private XmlParser $parser;

    protected function setUp(): void
    {
        $builder = new XmlParserBuilder();
        $this->parser = $builder->build();
    }

    #[DataProvider('xmlDocumentOrders')]
    public function testParse(string $xml, DocumentOrder $expectedDocument): void
    {
        $this->assertEquals($expectedDocument, $this->parser->parse($xml));
    }

    public static function xmlDocumentOrders(): array
    {
        return [
            'full_document' => include __DIR__ . '/Examples/full_document.php',
            'mandatory_only' => include __DIR__ . '/Examples/mandatory_only.php'
        ];
    }
}
