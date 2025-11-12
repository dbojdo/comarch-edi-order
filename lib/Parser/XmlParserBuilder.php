<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
final class XmlParserBuilder
{
    private ?string $cacheDir = null;

    private ?SerializerInterface $serializer = null;

    /**
     * Set the cache directory for the underlying Serializer instance
     * This setting is ignored, when custom serializer is set
     * This method resets the serializer previously set with "setSerializer"
     *
     * @param string $cacheDir
     */
    public function setCacheDir($cacheDir): void
    {
        $this->cacheDir = $cacheDir;
        $this->serializer = null;
    }

    /**
     * Set the underlying Serializer instance
     * This method resets the cache dir previously set with "setCacheDir"
     *
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
        $this->cacheDir = null;
    }

    public function build(): XmlParser
    {
        return new XmlParser($this->serializer ?: $this->createSerializer());
    }

    private function createSerializer(): Serializer
    {
        $serialiserBuilder = SerializerBuilder::create();
        $serialiserBuilder->addDefaultHandlers();
        $serialiserBuilder->addDefaultListeners();
        $serialiserBuilder->addDefaultDeserializationVisitors();

        if ($this->cacheDir) {
            $serialiserBuilder->setCacheDir($this->cacheDir);
        }

        return $serialiserBuilder->build();
    }
}
