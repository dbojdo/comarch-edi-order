<?php
namespace Webit\Comarch\EDI\Order\Model;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Model\Parties\Buyer;
use Webit\Comarch\EDI\Order\Model\Parties\BuyerHeadquarters;
use Webit\Comarch\EDI\Order\Model\Parties\Seller;
use Webit\Comarch\EDI\Order\Model\Parties\DeliveryPoint;
use Webit\Comarch\EDI\Order\Model\Parties\Invoice;
use Webit\Comarch\EDI\Order\Model\Parties\ShipFrom;
use Webit\Comarch\EDI\Order\Model\Parties\UltimateCustomer;
use Webit\Comarch\EDI\Order\Model\Parties\Carrier;
use Webit\Comarch\EDI\Order\Model\Parties\OrderedBy;

/**
 *
 * @author dbojdo
 *        
 *         @JMS\XmlRoot("Order-Parties")
 */
class OrderParties
{

    /**
     *
     * @var Buyer
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\Buyer")
     * @JMS\SerializedName("Buyer")
     */
    protected $buyer;

    /**
     *
     * @var BuyerHeadquarters
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\BuyerHeadquarters")
     * @JMS\SerializedName("BuyerHeadquarters")
     */
    protected $buyerHeadquarters;

    /**
     *
     * @var Invoice
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\Invoice")
     * @JMS\SerializedName("Invoicee")
     */
    protected $invoice;

    /**
     *
     * @var Seller
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\Seller")
     * @JMS\SerializedName("Seller")
     */
    protected $seller;

    /**
     *
     * @var DeliveryPoint
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\DeliveryPoint")
     * @JMS\SerializedName("DeliveryPoint")
     */
    protected $deliveryPoint;

    /**
     *
     * @var ShipFrom
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\ShipFrom")
     * @JMS\SerializedName("ShipFrom")
     */
    protected $shipFrom;

    /**
     *
     * @var UltimateCustomer
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\UltimateCustomer")
     * @JMS\SerializedName("UltimateCustomer")
     */
    protected $ultimateCustomer;

    /**
     *
     * @var Carrier
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\Carrier")
     * @JMS\SerializedName("Carrier")
     */
    protected $carrier;

    /**
     *
     * @var OrderedBy
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Parties\OrderedBy")
     * @JMS\SerializedName("OrderedBy")
     */
    protected $orderedBy;

    /**
     *
     * @return Buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     *
     * @param Buyer $buyer            
     */
    public function setBuyer(Buyer $buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     *
     * @return BuyerHeadquarters
     */
    public function getBuyerHeadquarters()
    {
        return $this->buyerHeadquarters;
    }

    /**
     *
     * @param BuyerHeadquarters $buyerHeadquarters            
     */
    public function setBuyerHeadquarters(BuyerHeadquarters $buyerHeadquarters)
    {
        $this->buyerHeadquarters = $buyerHeadquarters;
    }

    /**
     *
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     *
     * @param Invoice $invoice            
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     *
     * @return Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     *
     * @param Seller $seller            
     */
    public function setSeller(Seller $seller)
    {
        $this->seller = $seller;
    }

    /**
     *
     * @return DeliveryPoint
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

    /**
     *
     * @return ShipFrom
     */
    public function getShipFrom()
    {
        return $this->shipFrom;
    }

    /**
     *
     * @param ShipFrom $shipFrom            
     */
    public function setShipFrom(ShipFrom $shipFrom)
    {
        $this->shipFrom = $shipFrom;
    }

    /**
     *
     * @return UltimateCustomer
     */
    public function getUltimateCustomer()
    {
        return $this->ultimateCustomer;
    }

    /**
     *
     * @param UltimateCustomer $ultimateCustomer            
     */
    public function setUltimateCustomer(UltimateCustomer $ultimateCustomer)
    {
        $this->ultimateCustomer = $ultimateCustomer;
    }

    /**
     *
     * @return Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     *
     * @param Carrier $carrier            
     */
    public function setCarrier(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     *
     * @return OrderedBy
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     *
     * @param OrderedBy $orderedBy            
     */
    public function setOrderedBy(OrderedBy $orderedBy)
    {
        $this->orderedBy = $orderedBy;
    }
}
