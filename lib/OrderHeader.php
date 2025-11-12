<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Header\Payment;
use Webit\Comarch\EDI\Order\Header\Delivery;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Order-Header')]
final class OrderHeader
{
    public const string DOCUMENT_FUNCTION_CODE_ORIGINAL = 'O';
    public const string DOCUMENT_FUNCTION_CODE_REPLACEMENT = 'R';
    public const string MESSAGE_TYPE_ORDER = 'OD';
    public const string MESSAGE_TYPE_CROSS_DOCKING = 'CD';

    #[JMS\SerializedName('OrderNumber')]
    private ?string $orderNumber = null;

    #[JMS\SerializedName('VendorOrderNumber')]
    private ?string $vendorOrderNumber = null;

    #[JMS\SerializedName('OrderDate')]
    private ?string $orderDate = null;

    #[JMS\SerializedName('OrderTime')]
    private ?string $orderTime = null;

    #[JMS\SerializedName('ExpectedDeliveryDate')]
    private ?string $expectedDeliveryDate = null;

    #[JMS\SerializedName('ExpectedDeliveryTime')]
    private ?string $expectedDeliveryTime = null;

    #[JMS\SerializedName('CollectionDate')]
    private ?string $collectionDate = null;

    #[JMS\SerializedName('CollectionTime')]
    private ?string $collectionTime = null;

    #[JMS\SerializedName('PromotionReference')]
    private ?string $promotionReference = null;

    #[JMS\SerializedName('DocumentFunctionCode')]
    private ?string $documentFunctionCode = null;

    #[JMS\SerializedName('MessageType')]
    private ?string $messageType = null;

    #[JMS\SerializedName('Remarks')]
    private ?string $remarks = null;

    #[JMS\SerializedName('OrderCurrency')]
    private ?string $orderCurrency = null;

    #[JMS\SerializedName('Payment')]
    private ?Payment $payment = null;

    #[JMS\SerializedName('Delivery')]
    private ?Delivery $delivery = null;

    public function __construct(
        ?string $orderNumber = null,
        ?string $vendorOrderNumber = null,
        \DateTimeImmutable $orderDate = null,
        \DateTimeImmutable $orderTime = null,
        \DateTimeImmutable $expectedDeliveryDate = null,
        \DateTimeImmutable $expectedDeliveryTime = null,
        \DateTimeImmutable $collectionDate = null,
        \DateTimeImmutable $collectionTime = null,
        ?string $promotionReference = null,
        ?string $documentFunctionCode = null,
        ?string $messageType = null,
        ?string $remarks = null,
        ?string $orderCurrency = null,
        ?Payment $payment = null,
        ?Delivery $delivery = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->vendorOrderNumber = $vendorOrderNumber;
        $this->orderDate = $orderDate?->format('Y-m-d');
        $this->orderTime = $orderTime?->format('H:i');
        $this->expectedDeliveryDate = $expectedDeliveryDate?->format('Y-m-d');
        $this->expectedDeliveryTime = $expectedDeliveryTime?->format('H:i');
        $this->collectionDate = $collectionDate?->format('Y-m-d');
        $this->collectionTime = $collectionTime?->format('H:i');
        $this->promotionReference = $promotionReference;
        $this->documentFunctionCode = $documentFunctionCode;
        $this->messageType = $messageType;
        $this->remarks = $remarks;
        $this->orderCurrency = $orderCurrency;
        $this->payment = $payment;
        $this->delivery = $delivery;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    public function getVendorOrderNumber(): ?string
    {
        return $this->vendorOrderNumber;
    }

    public function setVendorOrderNumber(string $vendorOrderNumber): void
    {
        $this->vendorOrderNumber = $vendorOrderNumber;
    }

    public function getOrderDate(): ?\DateTimeImmutable
    {
        return $this->orderDate ? date_create_immutable($this->orderDate) : null;
    }

    public function setOrderDate(\DateTimeImmutable $orderDate): void
    {
        $this->orderDate = $orderDate->format('Y-m-d');
    }

    public function getOrderTime(): ?\DateTimeImmutable
    {
        return $this->orderTime ? date_create_immutable($this->orderTime) : null;
    }

    public function setOrderTime(\DateTimeImmutable $orderTime): void
    {
        $this->orderTime = $orderTime->format('H:i');
    }

    public function getExpectedDeliveryDate(): ?\DateTimeImmutable
    {
        return $this->expectedDeliveryDate ? date_create_immutable($this->expectedDeliveryDate) : null;
    }

    public function setExpectedDeliveryDate(\DateTimeImmutable $expectedDeliveryDate): void
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate->format('Y-m-d');
    }

    public function getExpectedDeliveryTime(): ?\DateTimeImmutable
    {
        return $this->expectedDeliveryTime ? date_create_immutable($this->expectedDeliveryTime) : null;
    }

    public function setExpectedDeliveryTime(\DateTimeImmutable $expectedDeliveryTime): void
    {
        $this->expectedDeliveryTime = $expectedDeliveryTime->format('H:i');
    }

    public function getCollectionDate(): ?\DateTimeImmutable
    {
        return $this->collectionDate ? date_create_immutable($this->collectionDate) : null;
    }

    public function setCollectionDate(\DateTimeImmutable $collectionDate): void
    {
        $this->collectionDate = $collectionDate->format('Y-m-d');
    }

    public function getCollectionTime(): ?\DateTimeImmutable
    {
        return $this->collectionTime ? date_create_immutable($this->collectionTime) : null;
    }

    public function setCollectionTime(\DateTimeImmutable $collectionTime): void
    {
        $this->collectionTime = $collectionTime->format('H:i');
    }

    public function getPromotionReference(): ?string
    {
        return $this->promotionReference;
    }

    public function setPromotionReference(string $promotionReference): void
    {
        $this->promotionReference = $promotionReference;
    }

    public function getDocumentFunctionCode(): ?string
    {
        return $this->documentFunctionCode;
    }

    /**
     * @param string $documentFunctionCode
     */
    public function setDocumentFunctionCode(string $documentFunctionCode): void
    {
        $this->documentFunctionCode = $documentFunctionCode;
    }

    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    public function setMessageType(string $messageType): void
    {
        $this->messageType = $messageType;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): void
    {
        $this->remarks = $remarks;
    }

    public function getOrderCurrency(): ?string
    {
        return $this->orderCurrency;
    }

    public function setOrderCurrency(string $orderCurrency): void
    {
        $this->orderCurrency = $orderCurrency;
    }

    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): void
    {
        $this->payment = $payment;
    }

    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    public function setDelivery(Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }
}
