<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Line-Item')]
final class LineItem
{
    /**
     * Typ opakowania zwrotnego
     *
     * @var string
     */
    public const string ITEM_TYPE_CU = 'CU';
    public const string ITEM_TYPE_RC = 'RC';

    /**
     * Jednostki miary
     *
     * @var string
     */
    public const string UNIT_OF_MEASURE_PCE = 'PCE';
    public const string UNIT_OF_MEASURE_KGM = 'KGM';
    public const string UNIT_OF_MEASURE_MTR = 'MTR';
    public const string UNIT_OF_MEASURE_MTK = 'MTK';
    public const string UNIT_OF_MEASURE_LTR = 'LTR';
    public const string UNIT_OF_MEASURE_PR = 'PR';
    public const string UNIT_OF_MEASURE_TNE = 'TNE';

    /**
     * Identyfikacja typu opakowania
     *
     * @var string
     */
    public const string PACKAGE_TYPE_CT = 'CT';

    #[JMS\SerializedName("LineNumber")]
    private ?int $number = null;

    #[JMS\SerializedName("EAN")]
    private ?string $ean = null;

    #[JMS\SerializedName("BuyerItemCode")]
    private ?string $buyerItemCode = null;

    #[JMS\SerializedName("SupplierItemCode")]
    private ?string $supplierItemCode = null;

    #[JMS\SerializedName("PackageEAN")]
    private ?string $packageEan = null;

    #[JMS\SerializedName("ItemDescription")]
    private ?string $description = null;

    #[JMS\SerializedName("ItemType")]
    private ?string $type = null;

    #[JMS\SerializedName("OrderedQuantity")]
    private ?float $orderedQuantity = null;

    #[JMS\SerializedName("FreeOrderedQuantity")]
    private ?float $freeOrderedQuantity = null;

    #[JMS\SerializedName("OrderedUnitPacksize")]
    private ?float $orderedUnitPacksize = null;

    #[JMS\SerializedName("InvoicedQuantity")]
    private ?float $invoicedQuantity = null;

    #[JMS\SerializedName("UnitOfMeasure")]
    private ?string $unitOfMeasure = null;

    #[JMS\SerializedName("OrderedUnitNetPrice")]
    private ?float $orderedUnitNetPrice = null;

    #[JMS\SerializedName("OrderedUnitRetailPrice")]
    private ?float $orderUnitRetailPrice = null;

    #[JMS\SerializedName("OrderCurrency")]
    private ?string $orderedCurrency = null;

    #[JMS\SerializedName("ExpectedDeliveryDate")]
    private ?string $expectedDeliveryDate = null;

    #[JMS\SerializedName("ExpectedDeliveryTime")]
    private ?string $expectedDeliveryTime = null;

    #[JMS\SerializedName("ExpirationDate")]
    private ?string $expirationDate = null;

    #[JMS\SerializedName("PromotionReference")]
    private ?string $promotionReference = null;

    #[JMS\SerializedName("PackageNumber")]
    private ?float $packageNumber = null;

    #[JMS\SerializedName("PackageType")]
    private ?string $packageType = null;

    #[JMS\SerializedName("Remarks")]
    private ?string $remarks = null;

    public function __construct(
        ?int $number = null,
        ?string $ean= null,
        ?string $buyerItemCode= null,
        ?string $supplierItemCode= null,
        ?string $packageEan= null,
        ?string $description= null,
        ?string $type= null,
        ?float $orderedQuantity= null,
        ?float $freeOrderedQuantity= null,
        ?float $orderedUnitPacksize= null,
        ?float $invoicedQuantity= null,
        ?string $unitOfMeasure= null,
        ?float $orderedUnitNetPrice= null,
        ?float $orderUnitRetailPrice= null,
        ?string $orderedCurrency= null,
        ?\DateTimeImmutable $expectedDeliveryDate = null,
        ?\DateTimeImmutable $expectedDeliveryTime = null,
        ?\DateTimeImmutable $expirationDate= null,
        ?string $promotionReference= null,
        ?float $packageNumber= null,
        ?string $packageType= null,
        ?string $remarks = null,
    ) {
        $this->number = $number;
        $this->ean = $ean;
        $this->buyerItemCode = $buyerItemCode;
        $this->supplierItemCode = $supplierItemCode;
        $this->packageEan = $packageEan;
        $this->description = $description;
        $this->type = $type;
        $this->orderedQuantity = $orderedQuantity;
        $this->freeOrderedQuantity = $freeOrderedQuantity;
        $this->orderedUnitPacksize = $orderedUnitPacksize;
        $this->invoicedQuantity = $invoicedQuantity;
        $this->unitOfMeasure = $unitOfMeasure;
        $this->orderedUnitNetPrice = $orderedUnitNetPrice;
        $this->orderUnitRetailPrice = $orderUnitRetailPrice;
        $this->orderedCurrency = $orderedCurrency;
        $this->expectedDeliveryDate = $expectedDeliveryDate?->format('Y-m-d');
        $this->expectedDeliveryTime = $expectedDeliveryTime?->format('H:i');
        $this->expirationDate = $expirationDate?->format('Y-m-d');
        $this->promotionReference = $promotionReference;
        $this->packageNumber = $packageNumber;
        $this->packageType = $packageType;
        $this->remarks = $remarks;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    public function getBuyerItemCode(): ?string
    {
        return $this->buyerItemCode;
    }

    public function setBuyerItemCode(?string $buyerItemCode): void
    {
        $this->buyerItemCode = $buyerItemCode;
    }

    public function getSupplierItemCode(): ?string
    {
        return $this->supplierItemCode;
    }

    public function setSupplierItemCode(?string $supplierItemCode): void
    {
        $this->supplierItemCode = $supplierItemCode;
    }

    public function getPackageEan(): ?string
    {
        return $this->packageEan;
    }

    public function setPackageEan(?string $packageEan): void
    {
        $this->packageEan = $packageEan;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getOrderedQuantity(): ?float
    {
        return $this->orderedQuantity;
    }

    public function setOrderedQuantity(?float $orderedQuantity): void
    {
        $this->orderedQuantity = $orderedQuantity;
    }

    public function getFreeOrderedQuantity(): ?float
    {
        return $this->freeOrderedQuantity;
    }

    public function setFreeOrderedQuantity(?float $freeOrderedQuantity): void
    {
        $this->freeOrderedQuantity = $freeOrderedQuantity;
    }

    public function getOrderedUnitPacksize(): ?float
    {
        return $this->orderedUnitPacksize;
    }

    public function setOrderedUnitPacksize(?float $orderedUnitPacksize): void
    {
        $this->orderedUnitPacksize = $orderedUnitPacksize;
    }

    public function getInvoicedQuantity(): ?float
    {
        return $this->invoicedQuantity;
    }

    public function setInvoicedQuantity(?float $invoicedQuantity): void
    {
        $this->invoicedQuantity = $invoicedQuantity;
    }

    public function getUnitOfMeasure(): ?string
    {
        return $this->unitOfMeasure;
    }

    public function setUnitOfMeasure(?string $unitOfMeasure): void
    {
        $this->unitOfMeasure = $unitOfMeasure;
    }

    public function getOrderedUnitNetPrice(): ?float
    {
        return $this->orderedUnitNetPrice;
    }

    public function setOrderedUnitNetPrice(?float $orderedUnitNetPrice): void
    {
        $this->orderedUnitNetPrice = $orderedUnitNetPrice;
    }

    public function getOrderUnitRetailPrice(): ?float
    {
        return $this->orderUnitRetailPrice;
    }

    public function setOrderUnitRetailPrice(?float $orderUnitRetailPrice): void
    {
        $this->orderUnitRetailPrice = $orderUnitRetailPrice;
    }

    public function getOrderedCurrency(): ?string
    {
        return $this->orderedCurrency;
    }

    /**
     * @param string $orderedCurrency
     */
    public function setOrderedCurrency(?string $orderedCurrency): void
    {
        $this->orderedCurrency = $orderedCurrency;
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

    public function getExpirationDate(): ?\DateTimeImmutable
    {
        return $this->expirationDate ? date_create_immutable($this->expirationDate) : null;
    }

    public function setExpirationDate(\DateTimeImmutable $expirationDate): void
    {
        $this->expirationDate = $expirationDate->format('Y-m-d');
    }

    public function getPromotionReference(): ?string
    {
        return $this->promotionReference;
    }

    public function setPromotionReference(?string $promotionReference): void
    {
        $this->promotionReference = $promotionReference;
    }

    public function getPackageNumber(): ?float
    {
        return $this->packageNumber;
    }

    public function setPackageNumber(?float $packageNumber): void
    {
        $this->packageNumber = $packageNumber;
    }

    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    public function setPackageType(?string $packageType): void
    {
        $this->packageType = $packageType;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): void
    {
        $this->remarks = $remarks;
    }
}
