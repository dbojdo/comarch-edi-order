<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Jms\ArrayType;
use Webit\Comarch\EDI\Order\Lines\Line;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Order-Lines')]
final class OrderLines implements \IteratorAggregate
{
    /**
     * @param Line[] $lines
     */
    public function __construct(
        #[JMS\XmlList(entry: 'Line', inline: true)]
        #[JMS\Type(name: new ArrayType(Line::class))]
        private array $lines = []
    ) {
    }

    /**
     * @return Line[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @param Line[] $lines
     */
    public function setLines(array $lines): void
    {
        $this->lines = $lines;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->getLines());
    }
}
