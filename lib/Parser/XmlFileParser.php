<?php
namespace Webit\Comarch\EDI\Order\Parser;

use Webit\Comarch\EDI\Order\Parser\Exception\ParsingException;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlFileParser
{
    /**
     * @var XmlParser
     */
    private $xmlParser;

    /**
     * XmlFileParser constructor.
     * @param XmlParser $xmlParser
     */
    public function __construct(XmlParser $xmlParser)
    {
        $this->xmlParser = $xmlParser;
    }

    /**
     * @param \SplFileInfo $xmlFile
     * @return \Webit\Comarch\EDI\Order\DocumentOrder
     */
    public function parse(\SplFileInfo $xmlFile)
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
