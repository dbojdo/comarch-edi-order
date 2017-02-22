<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Delivery")
 */
class Delivery
{
    /**
     * @var DeliveryTerms
     * @JMS\Type("Webit\Comarch\EDI\Order\Header\DeliveryTerms")
     * @JMS\SerializedName("DeliveryTerms")
     */
    private $deliveryTerms;

    /**
     * Delivery constructor.
     * @param DeliveryTerms $deliveryTerms
     */
    public function __construct(DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
    }

    /**
     * @return DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * @param DeliveryTerms $deliveryTerms
     */
    public function setDeliveryTerms(DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
    }
}
