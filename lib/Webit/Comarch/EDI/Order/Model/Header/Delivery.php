<?php
namespace Webit\Comarch\EDI\Order\Model\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 *
 * @JMS\XmlRoot("Delivery")
 */
class Delivery
{

    /**
     *
     * @var DeliveryTerms 
     * 
     * @JMS\Type("DeliveryTerms")
     * @JMS\SerializedName("DeliveryTerms")
     */
    protected $deliveryTerms;

    /**
     *
     * @return DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     *
     * @param DeliveryTerms $deliveryTerms            
     */
    public function setDeliveryTerms(DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
    }
}
