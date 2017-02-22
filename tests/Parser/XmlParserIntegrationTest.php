<?php
namespace Tests\Webit\Comarch\EDI\Order\Parser;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Webit\Comarch\EDI\Order\DocumentOrder;
use Webit\Comarch\EDI\Order\Parser\XmlParser;
use Webit\Comarch\EDI\Order\Parser\XmlParserBuilder;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserIntegrationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var XmlParser
     */
    private $parser;

    public static function setUpBeforeClass()
    {
        $autoload = include __DIR__.'/../../vendor/autoload.php';
        AnnotationRegistry::registerLoader(array($autoload, 'loadClass'));
    }

    protected function setUp()
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
