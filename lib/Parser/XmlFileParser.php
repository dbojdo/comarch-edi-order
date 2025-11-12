<?php
namespace Webit\Comarch\EDI\Order\Parser;

use Webit\Comarch\EDI\Order\DocumentOrder;
use Webit\Comarch\EDI\Order\Parser\Exception\ParsingException;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
final readonly class XmlFileParser
{
    public function __construct(private XmlParser $xmlParser)
    {
    }

    /**
     * @throws ParsingException
     */
    public function parse(\SplFileInfo $xmlFile): DocumentOrder
    {
        try {
            return $this->xmlParser->parse(file_get_contents($xmlFile->getPathname()));
        } catch (ParsingException $e) {
            throw new ParsingException(
                sprintf('Error during parsing input XML file "%s".', $xmlFile->getPathname()),
                0,
                $e
            );
        }
    }
}
