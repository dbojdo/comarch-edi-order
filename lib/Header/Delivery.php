<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Delivery')]
final class Delivery
{
    #[JMS\SerializedName('DeliveryTerms')]
    private ?DeliveryTerms $deliveryTerms;

    public function __construct(DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
    }

    public function getDeliveryTerms(): ?DeliveryTerms
    {
        return $this->deliveryTerms;
    }

    public function setDeliveryTerms(?DeliveryTerms $deliveryTerms): void
    {
        $this->deliveryTerms = $deliveryTerms;
    }
}
