<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Header\Payment;
use Webit\Comarch\EDI\Order\Header\Delivery;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Order-Header")
 */
class OrderHeader
{
    /**
     * @var string
     */
    const DOCUMENT_FUNCTION_CODE_ORIGINAL = 'O';
    const DOCUMENT_FUNCTION_CODE_REPLACEMENT = 'R';

    /**
     * @var string
     */
    const MESSAGE_TYPE_ORDER = 'OD';
    const MESSAGE_TYPE_CROSS_DOCKING = 'CD';

    /**
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderNumber")
     */
    private $orderNumber;

    /**
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("VendorOrderNumber")
     */
    private $vendorOrderNumber;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderDate")
     */
    private $orderDate;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderTime")
     */
    private $orderTime;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ExpectedDeliveryDate")
     */
    private $expectedDeliveryDate;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ExpectedDeliveryTime")
     */
    private $expectedDeliveryTime;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CollectionDate")
     */
    private $collectionDate;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CollectionTime")
     */
    private $collectionTime;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PromotionReference")
     */
    private $promotionReference;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("DocumentFunctionCode")
     */
    private $documentFunctionCode;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("MessageType")
     */
    private $messageType;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Remarks")
     */
    private $remarks;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderCurrency")
     */
    private $orderCurrency;

    /**
     * @var Payment
     * @JMS\Type("Webit\Comarch\EDI\Order\Header\Payment")
     * @JMS\SerializedName("Payment")
     */
    private $payment;

    /**
     * @var Delivery
     * @JMS\Type("Webit\Comarch\EDI\Order\Header\Delivery")
     * @JMS\SerializedName("Delivery")
     */
    private $delivery;

    /**
     * OrderHeader constructor.
     * @param string $orderNumber
     * @param string $vendorOrderNumber
     * @param \DateTime $orderDate
     * @param \DateTime $orderTime
     * @param \DateTime $expectedDeliveryDate
     * @param \DateTime $expectedDeliveryTime
     * @param \DateTime $collectionDate
     * @param \DateTime $collectionTime
     * @param string $promotionReference
     * @param string $documentFunctionCode
     * @param string $messageType
     * @param string $remarks
     * @param string $orderCurrency
     * @param Payment $payment
     * @param Delivery $delivery
     */
    public function __construct(
        $orderNumber = null,
        $vendorOrderNumber = null,
        \DateTime $orderDate = null,
        \DateTime $orderTime = null,
        \DateTime $expectedDeliveryDate = null,
        \DateTime $expectedDeliveryTime = null,
        \DateTime $collectionDate = null,
        \DateTime $collectionTime = null,
        $promotionReference = null,
        $documentFunctionCode = null,
        $messageType = null,
        $remarks = null,
        $orderCurrency = null,
        Payment $payment = null,
        Delivery $delivery = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->vendorOrderNumber = $vendorOrderNumber;
        $this->orderDate = $orderDate ? $orderDate->format('Y-m-d') : null;
        $this->orderTime = $orderTime ? $orderTime->format('H:i') : null;
        $this->expectedDeliveryDate = $expectedDeliveryDate ? $expectedDeliveryDate->format('Y-m-d') : null;
        $this->expectedDeliveryTime = $expectedDeliveryTime ? $expectedDeliveryTime->format('H:i') : null;
        $this->collectionDate = $collectionDate ? $collectionDate->format('Y-m-d') : null;
        $this->collectionTime = $collectionTime ? $collectionTime->format('H:i') : null;
        $this->promotionReference = $promotionReference;
        $this->documentFunctionCode = $documentFunctionCode;
        $this->messageType = $messageType;
        $this->remarks = $remarks;
        $this->orderCurrency = $orderCurrency;
        $this->payment = $payment;
        $this->delivery = $delivery;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->vendorOrderNumber;
    }

    /**
     * @param string $vendorOrderNumber
     */
    public function setVendorOrderNumber($vendorOrderNumber)
    {
        $this->vendorOrderNumber = $vendorOrderNumber;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate ? date_create($this->orderDate) : null;
    }

    /**
     *
     * @param \DateTime $orderDate            
     */
    public function setOrderDate(\DateTime $orderDate)
    {
        $this->orderDate = $orderDate->format('Y-m-d');
    }

    /**
     * @return \DateTime
     */
    public function getOrderTime()
    {
        return $this->orderTime ? date_create($this->orderTime) : null;
    }

    /**
     *
     * @param \DateTime $orderTime            
     */
    public function setOrderTime(\DateTime $orderTime)
    {
        $this->orderTime = $orderTime->format('H:i');
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate ? date_create($this->expectedDeliveryDate) : null;
    }

    /**
     * @param \DateTime $expectedDeliveryDate            
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryTime()
    {
        return $this->expectedDeliveryTime ? date_create($this->expectedDeliveryTime) : null;
    }

    /**
     * @param \DateTime $expectedDeliveryTime            
     */
    public function setExpectedDeliveryTime(\DateTime $expectedDeliveryTime)
    {
        $this->expectedDeliveryTime = $expectedDeliveryTime->format('H:i');
    }

    /**
     * @return \DateTime
     */
    public function getCollectionDate()
    {
        return $this->collectionDate ? date_create($this->collectionDate) : null;
    }

    /**
     * @param \DateTime $collectionDate            
     */
    public function setCollectionDate(\DateTime $collectionDate)
    {
        $this->collectionDate = $collectionDate->format('Y-m-d');
    }

    /**
     * @return \DateTime
     */
    public function getCollectionTime()
    {
        return $this->collectionTime ? date_create($this->collectionTime) : null;
    }

    /**
     * @param \DateTime $collectionTime            
     */
    public function setCollectionTime(\DateTime $collectionTime)
    {
        $this->collectionTime = $collectionTime->format('H:i');
    }

    /**
     * @return string
     */
    public function getPromotionReference()
    {
        return $this->promotionReference;
    }

    /**
     * @param string $promotionReference
     */
    public function setPromotionReference($promotionReference)
    {
        $this->promotionReference = $promotionReference;
    }

    /**
     * @return string
     */
    public function getDocumentFunctionCode()
    {
        return $this->documentFunctionCode;
    }

    /**
     * @param string $documentFunctionCode
     */
    public function setDocumentFunctionCode($documentFunctionCode)
    {
        $this->documentFunctionCode = $documentFunctionCode;
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->orderCurrency;
    }

    /**
     * @param string $orderCurrency
     */
    public function setOrderCurrency($orderCurrency)
    {
        $this->orderCurrency = $orderCurrency;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment            
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery            
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;
    }
}
