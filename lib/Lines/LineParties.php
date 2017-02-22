<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("LineParties")
 */
class LineParties
{
    /**
     * @var DeliveryPoint
     * @JMS\Type("Webit\Comarch\EDI\Order\Lines\DeliveryPoint")
     * @JMS\SerializedName("DeliveryPoint")
     */
    private $deliveryPoint;

    /**
     * LineParties constructor.
     * @param DeliveryPoint $deliveryPoint
     */
    public function __construct(DeliveryPoint $deliveryPoint = null)
    {
        $this->deliveryPoint = $deliveryPoint;
    }

    /**
     * @return DeliveryPoint
     */
    public function getDeliveryPoint()
    {
        return $this->deliveryPoint;
    }

    /**
     * @param DeliveryPoint $deliveryPoint            
     */
    public function setDeliveryPoint(DeliveryPoint $deliveryPoint)
    {
        $this->deliveryPoint = $deliveryPoint;
    }
}
