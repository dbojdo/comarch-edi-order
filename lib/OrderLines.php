<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Lines\Line;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Order-Lines")
 */
class OrderLines implements \IteratorAggregate
{

    /**
     * @var Line[]
     * @JMS\Type("array<Webit\Comarch\EDI\Order\Lines\Line>")
     * @JMS\XmlList(inline = true, entry = "Line")
     */
    private $lines = array();

    /**
     * OrderLines constructor.
     * @param Line[] $lines
     */
    public function __construct(array $lines = array())
    {
        $this->lines = $lines;
    }

    /**
     * @return Line[]
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * @param Line[] $lines
     */
    public function setLines(array $lines)
    {
        $this->lines = $lines;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getLines());
    }
}

