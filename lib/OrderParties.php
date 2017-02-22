<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
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
 * @JMS\XmlRoot("Order-Parties")
 */
class OrderParties
{
    /**
     * @var Buyer
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Buyer")
     * @JMS\SerializedName("Buyer")
     */
    private $buyer;

    /**
     * @var BuyerHeadquarters
     * @JMS\Type("array<Webit\Comarch\EDI\Order\Parties\BuyerHeadquarters>")
     * @JMS\SerializedName("BuyerHeadquarters")
     * @JMS\XmlList(inline = true, entry = "BuyerHeadquarters")
     */
    private $buyerHeadquarters = array();

    /**
     * @var Invoicee
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Invoicee")
     * @JMS\SerializedName("Invoicee")
     */
    private $invoicee;

    /**
     * @var Seller
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Seller")
     * @JMS\SerializedName("Seller")
     */
    private $seller;

    /**
     * @var DeliveryPoint
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\DeliveryPoint")
     * @JMS\SerializedName("DeliveryPoint")
     */
    private $deliveryPoint;

    /**
     * @var ShipFrom
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\ShipFrom")
     * @JMS\SerializedName("ShipFrom")
     */
    private $shipFrom;

    /**
     * @var UltimateCustomer
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\UltimateCustomer")
     * @JMS\SerializedName("UltimateCustomer")
     */
    private $ultimateCustomer;

    /**
     * @var Carrier
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Carrier")
     * @JMS\SerializedName("Carrier")
     */
    private $carrier;

    /**
     * @var OrderedBy
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\OrderedBy")
     * @JMS\SerializedName("OrderedBy")
     */
    private $orderedBy;

    /**
     * @var Sender
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Sender")
     * @JMS\SerializedName("Sender")
     */
    private $sender;

    /**
     * @var Receiver
     * @JMS\Type("Webit\Comarch\EDI\Order\Parties\Receiver")
     * @JMS\SerializedName("Receiver")
     */
    private $receiver;

    /**
     * OrderParties constructor.
     * @param Buyer $buyer
     * @param BuyerHeadquarters[] $buyerHeadquarters
     * @param Invoicee $invoicee
     * @param Seller $seller
     * @param DeliveryPoint $deliveryPoint
     * @param ShipFrom $shipFrom
     * @param UltimateCustomer $ultimateCustomer
     * @param Carrier $carrier
     * @param OrderedBy $orderedBy
     * @param Sender $sender
     * @param Receiver $receiver
     */
    public function __construct(
        Buyer $buyer = null,
        array $buyerHeadquarters = array(),
        Invoicee $invoicee = null,
        Seller $seller = null,
        DeliveryPoint $deliveryPoint = null,
        ShipFrom $shipFrom = null,
        UltimateCustomer $ultimateCustomer = null,
        Carrier $carrier = null,
        OrderedBy $orderedBy = null,
        Sender $sender = null,
        Receiver $receiver = null
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

    /**
     * @return Buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param Buyer $buyer            
     */
    public function setBuyer(Buyer $buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * @return BuyerHeadquarters
     */
    public function getBuyerHeadquarters()
    {
        return $this->buyerHeadquarters;
    }

    /**
     * @param BuyerHeadquarters $buyerHeadquarters            
     */
    public function setBuyerHeadquarters(BuyerHeadquarters $buyerHeadquarters)
    {
        $this->buyerHeadquarters = $buyerHeadquarters;
    }

    /**
     * @return Invoicee
     */
    public function getInvoicee()
    {
        return $this->invoicee;
    }

    /**
     * @param Invoicee $invoicee
     */
    public function setInvoicee(Invoicee $invoicee)
    {
        $this->invoicee = $invoicee;
    }

    /**
     * @return Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Seller $seller            
     */
    public function setSeller(Seller $seller)
    {
        $this->seller = $seller;
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

    /**
     * @return ShipFrom
     */
    public function getShipFrom()
    {
        return $this->shipFrom;
    }

    /**
     * @param ShipFrom $shipFrom            
     */
    public function setShipFrom(ShipFrom $shipFrom)
    {
        $this->shipFrom = $shipFrom;
    }

    /**
     * @return UltimateCustomer
     */
    public function getUltimateCustomer()
    {
        return $this->ultimateCustomer;
    }

    /**
     * @param UltimateCustomer $ultimateCustomer            
     */
    public function setUltimateCustomer(UltimateCustomer $ultimateCustomer)
    {
        $this->ultimateCustomer = $ultimateCustomer;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param Carrier $carrier            
     */
    public function setCarrier(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return OrderedBy
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * @param OrderedBy $orderedBy            
     */
    public function setOrderedBy(OrderedBy $orderedBy)
    {
        $this->orderedBy = $orderedBy;
    }

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Sender $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return Receiver
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param Receiver $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }
}
