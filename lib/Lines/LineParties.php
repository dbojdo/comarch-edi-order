<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('LineParties')]
final class LineParties
{
    #[JMS\SerializedName('DeliveryPoint')]
    private ?DeliveryPoint $deliveryPoint;

    public function __construct(?DeliveryPoint $deliveryPoint = null)
    {
        $this->deliveryPoint = $deliveryPoint;
    }

    public function getDeliveryPoint(): ?DeliveryPoint
    {
        return $this->deliveryPoint;
    }

    public function setDeliveryPoint(?DeliveryPoint $deliveryPoint): void
    {
        $this->deliveryPoint = $deliveryPoint;
    }
}
