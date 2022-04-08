<?php
namespace Webit\Comarch\EDI\Order\Parser;

use Doctrine\Common\Annotations\AnnotationRegistry;
use PHPUnit\Framework\TestCase;
use Webit\Comarch\EDI\Order\DocumentOrder;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserIntegrationTest extends TestCase
{
    /**
     * @var XmlParser
     */
    private $parser;

    public static function setUpBeforeClass(): void
    {
        $autoload = include __DIR__.'/../../vendor/autoload.php';
        AnnotationRegistry::registerLoader(array($autoload, 'loadClass'));
    }

    protected function setUp(): void
    {
        $builder = new XmlParserBuilder();
        $this->parser = $builder->build();
    }

    /**
     * @param string $xml
     * @param DocumentOrder $expectedDocument
     * @dataProvider xmlDocumentOrders
     */
    public function testParse($xml, DocumentOrder $expectedDocument)
    {
        $this->assertEquals($expectedDocument, $this->parser->parse($xml));
    }

    public function xmlDocumentOrders()
    {
        return array(
            'full_document' => include __DIR__.'/Examples/full_document.php',
            'mandatory_only' => include __DIR__.'/Examples/mandatory_only.php'
        );
    }
}
