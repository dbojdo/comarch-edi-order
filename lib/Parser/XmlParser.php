<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerInterface;
use Webit\Comarch\EDI\Order\DocumentOrder;
use Webit\Comarch\EDI\Order\Parser\Exception\ParsingException;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParser
{
    public function __construct(private SerializerInterface $serializer)
    {
    }

    /**
     * @throws ParsingException
     */
    public function parse(string $xml): DocumentOrder
    {
        try {
            /** @var DocumentOrder $document */
            $document = $this->serializer->deserialize($xml, 'Webit\Comarch\EDI\Order\DocumentOrder', 'xml');
            return $document;
        } catch (\Exception $e) {
            throw new ParsingException('Error during parsing the input XML.', 0, $e);
        }
    }
}
