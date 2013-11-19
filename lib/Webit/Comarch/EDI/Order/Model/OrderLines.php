<?php
namespace Webit\Comarch\EDI\Order\Model;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 * 
 * @JMS\XmlRoot("Order-Lines")
 */
class OrderLines
{

    /**
     *
     * @var array
     * 
     * @JMS\Type("array<Webit\Comarch\EDI\Order\Model\Lines\Line>")
     * @JMS\XmlList(inline = true, entry = "Line")
     */
    protected $lines;

    /**
     *
     * @return array
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     *
     * @param array $lines            
     */
    public function setLines(array $lines)
    {
        $this->lines = $lines;
    }
}

