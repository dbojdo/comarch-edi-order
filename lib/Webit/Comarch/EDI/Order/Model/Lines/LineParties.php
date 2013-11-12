<?php
namespace Webit\Comarch\EDI\Order\Model\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 *        
 * @JMS\XmlRoot("LineParties")
 */
class LineParties
{

    /**
     *
     * @var DeliveryPoint
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Lines\DeliveryPoint")
     * @JMS\SerializedName("DeliveryPoint")
     */
    protected $deliveryPoint;

    /**
     *
     * @return the DeliveryPoint
     */
    public function getDeliveryPoint()
    {
        return $this->deliveryPoint;
    }

    /**
     *
     * @param DeliveryPoint $deliveryPoint            
     */
    public function setDeliveryPoint(DeliveryPoint $deliveryPoint)
    {
        $this->deliveryPoint = $deliveryPoint;
    }
}
