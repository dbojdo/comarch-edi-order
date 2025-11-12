<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Jms\ArrayType;
use Webit\Comarch\EDI\Order\Parties\Buyer;
use Webit\Comarch\EDI\Order\Parties\BuyerHeadquarters;
use Webit\Comarch\EDI\Order\Parties\Receiver;
use Webit\Comarch\EDI\Order\Parties\Seller;
use Webit\Comarch\EDI\Order\Parties\DeliveryPoint;
use Webit\Comarch\EDI\Order\Parties\Invoicee;
use Webit\Comarch\EDI\Order\Parties\Sender;
use Webit\Comarch\EDI\Order\Parties\ShipFrom;
use Webit\Comarch\EDI\Order\Parties\UltimateCustomer;
use Webit\Comarch\EDI\Order\Parties\Carrier;
use Webit\Comarch\EDI\Order\Parties\OrderedBy;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Order-Parties')]
final class OrderParties
{
    #[JMS\SerializedName('Buyer')]
    private ?Buyer $buyer = null;

    #[JMS\Type(name: new ArrayType(BuyerHeadquarters::class))]
    #[JMS\SerializedName('BuyerHeadquarters')]
    #[JMS\XmlList(entry: 'BuyerHeadquarters', inline: true)]
    private array $buyerHeadquarters = [];

    #[JMS\SerializedName('Invoicee')]
    private ?Invoicee $invoicee = null;

    #[JMS\SerializedName('Seller')]
    private ?Seller $seller = null;

    #[JMS\SerializedName('DeliveryPoint')]
    private ?DeliveryPoint $deliveryPoint = null;

    #[JMS\SerializedName('ShipFrom')]
    private ?ShipFrom $shipFrom = null;

    #[JMS\SerializedName('UltimateCustomer')]
    private ?UltimateCustomer $ultimateCustomer = null;

    #[JMS\SerializedName('Carrier')]
    private ?Carrier $carrier = null;

    #[JMS\SerializedName('OrderedBy')]
    private ?OrderedBy $orderedBy = null;

    #[JMS\SerializedName('Sender')]
    private ?Sender $sender = null;

    #[JMS\SerializedName('Receiver')]
    private ?Receiver $receiver = null;

    public function __construct(
        ?Buyer $buyer = null,
        array $buyerHeadquarters = [],
        ?Invoicee $invoicee = null,
        ?Seller $seller = null,
        ?DeliveryPoint $deliveryPoint = null,
        ?ShipFrom $shipFrom = null,
        ?UltimateCustomer $ultimateCustomer = null,
        ?Carrier $carrier = null,
        ?OrderedBy $orderedBy = null,
        ?Sender $sender = null,
        ?Receiver $receiver = null
    ) {
        $this->buyer = $buyer;
        $this->buyerHeadquarters = $buyerHeadquarters;
        $this->invoicee = $invoicee;
        $this->seller = $seller;
        $this->deliveryPoint = $deliveryPoint;
        $this->shipFrom = $shipFrom;
        $this->ultimateCustomer = $ultimateCustomer;
        $this->carrier = $carrier;
        $this->orderedBy = $orderedBy;
        $this->sender = $sender;
        $this->receiver = $receiver;
    }

    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    public function setBuyer(Buyer $buyer): void
    {
        $this->buyer = $buyer;
    }

    /**
     * @return BuyerHeadquarters[]
     */
    public function getBuyerHeadquarters(): array
    {
        return $this->buyerHeadquarters;
    }

    /**
     * @param BuyerHeadquarters[] $buyerHeadquarters
     */
    public function setBuyerHeadquarters(array $buyerHeadquarters): void
    {
        $this->buyerHeadquarters = $buyerHeadquarters;
    }

    public function getInvoicee(): ?Invoicee
    {
        return $this->invoicee;
    }

    public function setInvoicee(Invoicee $invoicee): void
    {
        $this->invoicee = $invoicee;
    }

    public function getSeller(): ?Seller
    {
        return $this->seller;
    }

    /**
     * @param Seller $seller            
     */
    public function setSeller(Seller $seller): void
    {
        $this->seller = $seller;
    }

    public function getDeliveryPoint(): ?DeliveryPoint
    {
        return $this->deliveryPoint;
    }

    public function setDeliveryPoint(DeliveryPoint $deliveryPoint): void
    {
        $this->deliveryPoint = $deliveryPoint;
    }

    public function getShipFrom(): ?ShipFrom
    {
        return $this->shipFrom;
    }

    public function setShipFrom(ShipFrom $shipFrom): void
    {
        $this->shipFrom = $shipFrom;
    }

    public function getUltimateCustomer(): ?UltimateCustomer
    {
        return $this->ultimateCustomer;
    }

    public function setUltimateCustomer(UltimateCustomer $ultimateCustomer): void
    {
        $this->ultimateCustomer = $ultimateCustomer;
    }

    public function getCarrier(): ?Carrier
    {
        return $this->carrier;
    }

    public function setCarrier(Carrier $carrier): void
    {
        $this->carrier = $carrier;
    }

    public function getOrderedBy(): ?OrderedBy
    {
        return $this->orderedBy;
    }

    public function setOrderedBy(OrderedBy $orderedBy): void
    {
        $this->orderedBy = $orderedBy;
    }

    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    public function setSender(Sender $sender): void
    {
        $this->sender = $sender;
    }

    public function getReceiver(): ?Receiver
    {
        return $this->receiver;
    }

    public function setReceiver(Receiver $receiver): void
    {
        $this->receiver = $receiver;
    }
}
