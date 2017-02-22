<?php
namespace Webit\Comarch\EDI\Order\Parser;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class XmlParserBuilder
{
    /**
     * @var string
     */
    private $cacheDir;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * Set the cache directory for the underlying Serializer instance
     * This setting is ignored, when custom serializer is set
     * This method resets the serializer previously set with "setSerializer"
     *
     * @param string $cacheDir
     */
    public function setCacheDir($cacheDir)
    {
        $this->cacheDir = $cacheDir;
        $this->serializer = null;
    }

    /**
     * Set the the underlying Serializer instance
     * This method resets the cache dir previously set with "setCacheDir"
     *
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        $this->cacheDir = null;
    }

    /**
     * @return XmlParser
     */
    public function build()
    {
        $serialiser = $this->serializer ?: $this->createSerializer();

        return new XmlParser($serialiser);
    }

    /**
     * @return \JMS\Serializer\Serializer
     */
    private function createSerializer()
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
