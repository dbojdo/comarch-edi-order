<?php
namespace Webit\Comarch\EDI\Order\Model;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Model\Header\Payment;
use Webit\Comarch\EDI\Order\Model\Header\Delivery;

/**
 *
 * @author dbojdo
 *        
 *         @JMS\XmlRoot("Order-Header")
 */
class OrderHeader
{

    /**
     * Typ dokumentu
     *
     * @var string
     */
    const DOCUMENT_FUNCTION_CODE_ORIGINAL = 'O';
    const DOCUMENT_FUNCTION_CODE_REPLACEMENT = 'R';

    /**
     * Typ zamówienia
     *
     * @var string
     */
    const MESSAGE_TYPE_ORDER = 'OD';
    const MESSAGE_TYPE_CROSS_DOCKING = 'CD';

    /**
     * Numer zamówienia
     *
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderNumber")
     */
    protected $orderNumber;

    /**
     * Numer propozycji zamówienia
     *
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("VendorOrderNumber")
     */
    protected $vendorOrderNumber;

    /**
     * Data zamówienia
     *
     * @var \DateTime
     * @JMS\Type("DateTime<Y-m-d>")
     * @JMS\SerializedName("OrderDate")
     */
    protected $orderDate;

    /**
     * Czas zamówienia
     *
     * @var \DateTime
     * @JMS\Type("DateTime<H:i>")
     * @JMS\SerializedName("OrderTime")
     */
    protected $orderTime;

    /**
     * Żądana data dostawy
     *
     * @var \DateTime
     * @JMS\Type("DateTime<Y-m-d>")
     * @JMS\SerializedName("ExpectedDeliveryDate")
     */
    protected $expectedDeliveryDate;

    /**
     * Żądany czas dostawy
     *
     * @var \DateTime 
     * @JMS\Type("DateTime<H:i>")
     * @JMS\SerializedName("ExpectedDeliveryTime")
     */
    protected $expectedDeliveryTime;

    /**
     * Data odbioru
     *
     * @var \DateTime
     * @JMS\Type("DateTime<Y-m-d>")
     * @JMS\SerializedName("CollectionDate")
     */
    protected $collectionDate;

    /**
     * Czas odbioru
     *
     * @var \DateTime
     * @JMS\Type("DateTime<H:i>")
     * @JMS\SerializedName("CollectionTime")
     */
    protected $collectionTime;

    /**
     * Kod transakcji promocyjnej
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PromotionReference")
     */
    protected $promotionReference;

    /**
     * Typ dokumentu
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("DocumentFunctionCode")
     */
    protected $documentFunctionCode;

    /**
     * Typ zamówienia
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("MessageType")
     */
    protected $messageType;

    /**
     * Uwagi
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Remarks")
     */
    protected $remarks;

    /**
     * Waluta zamówienia
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderCurrency")
     */
    protected $orderCurrency;

    /**
     *
     * @var Payment
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Header\Payment")
     * @JMS\SerializedName("Payment")
     */
    protected $payment;

    /**
     *
     * @var Delivery
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Header\Delivery")
     * @JMS\SerializedName("Delivery")
     */
    protected $delivery;

    /**
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     *
     * @param string $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     *
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->vendorOrderNumber;
    }

    /**
     *
     * @param string $vendorOrderNumber
     */
    public function setVendorOrderNumber($vendorOrderNumber)
    {
        $this->vendorOrderNumber = $vendorOrderNumber;
    }

    /**
     *
     * @return DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     *
     * @param \DateTime $orderDate            
     */
    public function setOrderDate(\DateTime $orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     *
     * @return DateTime
     */
    public function getOrderTime()
    {
        return $this->orderTime;
    }

    /**
     *
     * @param \DateTime $orderTime            
     */
    public function setOrderTime(\DateTime $orderTime)
    {
        $this->orderTime = $orderTime;
    }

    /**
     *
     * @return DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }

    /**
     *
     * @param \DateTime $expectedDeliveryDate            
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
    }

    /**
     *
     * @return DateTime
     */
    public function getExpectedDeliveryTime()
    {
        return $this->expectedDeliveryTime;
    }

    /**
     *
     * @param \DateTime $expectedDeliveryTime            
     */
    public function setExpectedDeliveryTime(\DateTime $expectedDeliveryTime)
    {
        $this->expectedDeliveryTime = $expectedDeliveryTime;
    }

    /**
     *
     * @return DateTime
     */
    public function getCollectionDate()
    {
        return $this->collectionDate;
    }

    /**
     *
     * @param \DateTime $collectionDate            
     */
    public function setCollectionDate(\DateTime $collectionDate)
    {
        $this->collectionDate = $collectionDate;
    }

    /**
     *
     * @return DateTime
     */
    public function getCollectionTime()
    {
        return $this->collectionTime;
    }

    /**
     *
     * @param \DateTime $collectionTime            
     */
    public function setCollectionTime(\DateTime $collectionTime)
    {
        $this->collectionTime = $collectionTime;
    }

    /**
     *
     * @return string
     */
    public function getPromotionReference()
    {
        return $this->promotionReference;
    }

    /**
     *
     * @param string $promotionReference
     */
    public function setPromotionReference($promotionReference)
    {
        $this->promotionReference = $promotionReference;
    }

    /**
     *
     * @return string
     */
    public function getDocumentFunctionCode()
    {
        return $this->documentFunctionCode;
    }

    /**
     *
     * @param string $documentFunctionCode
     */
    public function setDocumentFunctionCode($documentFunctionCode)
    {
        $this->documentFunctionCode = $documentFunctionCode;
    }

    /**
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     *
     * @param string $messageType
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

    /**
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     *
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     *
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->orderCurrency;
    }

    /**
     *
     * @param string $orderCurrency
     */
    public function setOrderCurrency($orderCurrency)
    {
        $this->orderCurrency = $orderCurrency;
    }

    /**
     *
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     *
     * @param Payment $payment            
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     *
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     *
     * @param Delivery $delivery            
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;
    }
}
