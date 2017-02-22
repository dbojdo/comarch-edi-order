<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Line-Item")
 */
class LineItem
{
    /**
     * Typ opakowania zwrotnego
     *
     * @var string
     */
    const ITEM_TYPE_CU = 'CU';
    const ITEM_TYPE_RC = 'RC';

    /**
     * Jednostki miary
     *
     * @var string
     */
    const UNIT_OF_MEASURE_PCE = 'PCE';
    const UNIT_OF_MEASURE_KGM = 'KGM';
    const UNIT_OF_MEASURE_MTR = 'MTR';
    const UNIT_OF_MEASURE_MTK = 'MTK';
    const UNIT_OF_MEASURE_LTR = 'LTR';
    const UNIT_OF_MEASURE_PR = 'PR';
    const UNIT_OF_MEASURE_TNE = 'TNE';

    /**
     * Identyfikacja typu opakowania
     *
     * @var string
     */
    const PACKAGE_TYPE_CT = 'CT';

    /**
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("LineNumber")
     */
    private $number;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("EAN")
     */
    private $ean;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("BuyerItemCode")
     */
    private $buyerItemCode;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("SupplierItemCode")
     */
    private $supplierItemCode;

    /**
     * @var int
     * @JMS\Type("string")
     * @JMS\SerializedName("PackageEAN")
     */
    private $packageEan;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ItemDescription")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ItemType")
     */
    private $type;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedQuantity")
     */
    private $orderedQuantity;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("FreeOrderedQuantity")
     */
    private $freeOrderedQuantity;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitPacksize")
     */
    private $orderedUnitPacksize;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("InvoicedQuantity")
     */
    private $invoicedQuantity;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("UnitOfMeasure")
     */
    private $unitOfMeasure;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitNetPrice")
     */
    private $orderedUnitNetPrice;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitRetailPrice")
     */
    private $orderUnitRetailPrice;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderCurrency")
     */
    private $orderedCurrency;

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
     * @JMS\SerializedName("ExpirationDate")
     */
    private $expirationDate;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PromotionReference")
     */
    private $promotionReference;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("PackageNumber")
     */
    private $packageNumber;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PackageType")
     */
    private $packageType;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Remarks")
     */
    private $remarks;

    /**
     * LineItem constructor.
     * @param int $number
     * @param string $ean
     * @param string $buyerItemCode
     * @param string $supplierItemCode
     * @param int $packageEan
     * @param string $description
     * @param string $type
     * @param float $orderedQuantity
     * @param float $freeOrderedQuantity
     * @param float $orderedUnitPacksize
     * @param float $invoicedQuantity
     * @param string $unitOfMeasure
     * @param float $orderedUnitNetPrice
     * @param float $orderUnitRetailPrice
     * @param string $orderedCurrency
     * @param \DateTime $expectedDeliveryDate
     * @param \DateTime $expectedDeliveryTime
     * @param \DateTime $expirationDate
     * @param string $promotionReference
     * @param float $packageNumber
     * @param string $packageType
     * @param string $remarks
     */
    public function __construct(
        $number = null,
        $ean= null,
        $buyerItemCode= null,
        $supplierItemCode= null,
        $packageEan= null,
        $description= null,
        $type= null,
        $orderedQuantity= null,
        $freeOrderedQuantity= null,
        $orderedUnitPacksize= null,
        $invoicedQuantity= null,
        $unitOfMeasure= null,
        $orderedUnitNetPrice= null,
        $orderUnitRetailPrice= null,
        $orderedCurrency= null,
        \DateTime $expectedDeliveryDate = null,
        \DateTime $expectedDeliveryTime = null,
        \DateTime $expirationDate= null,
        $promotionReference= null,
        $packageNumber= null,
        $packageType= null,
        $remarks= null
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
        $this->expectedDeliveryDate = $expectedDeliveryDate ? $expectedDeliveryDate->format('Y-m-d') : null;
        $this->expectedDeliveryTime = $expectedDeliveryTime ? $expectedDeliveryTime->format('H:i') : null;
        $this->expirationDate = $expirationDate ? $expirationDate->format('Y-m-d') : null;
        $this->promotionReference = $promotionReference;
        $this->packageNumber = $packageNumber;
        $this->packageType = $packageType;
        $this->remarks = $remarks;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getBuyerItemCode()
    {
        return $this->buyerItemCode;
    }

    /**
     * @param string $buyerItemCode
     */
    public function setBuyerItemCode($buyerItemCode)
    {
        $this->buyerItemCode = $buyerItemCode;
    }

    /**
     * @return string
     */
    public function getSupplierItemCode()
    {
        return $this->supplierItemCode;
    }

    /**
     * @param string $supplierItemCode
     */
    public function setSupplierItemCode($supplierItemCode)
    {
        $this->supplierItemCode = $supplierItemCode;
    }

    /**
     * @return int
     */
    public function getPackageEan()
    {
        return $this->packageEan;
    }

    /**
     * @param int $packageEan
     */
    public function setPackageEan($packageEan)
    {
        $this->packageEan = $packageEan;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getOrderedQuantity()
    {
        return $this->orderedQuantity;
    }

    /**
     * @param float $orderedQuantity
     */
    public function setOrderedQuantity($orderedQuantity)
    {
        $this->orderedQuantity = $orderedQuantity;
    }

    /**
     * @return float
     */
    public function getFreeOrderedQuantity()
    {
        return $this->freeOrderedQuantity;
    }

    /**
     * @param float $freeOrderedQuantity
     */
    public function setFreeOrderedQuantity($freeOrderedQuantity)
    {
        $this->freeOrderedQuantity = $freeOrderedQuantity;
    }

    /**
     * @return float
     */
    public function getOrderedUnitPacksize()
    {
        return $this->orderedUnitPacksize;
    }

    /**
     * @param float $orderedUnitPacksize
     */
    public function setOrderedUnitPacksize($orderedUnitPacksize)
    {
        $this->orderedUnitPacksize = $orderedUnitPacksize;
    }

    /**
     * @return float
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * @param float $invoicedQuantity
     */
    public function setInvoicedQuantity($invoicedQuantity)
    {
        $this->invoicedQuantity = $invoicedQuantity;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * @param string $unitOfMeasure
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
    }

    /**
     * @return float
     */
    public function getOrderedUnitNetPrice()
    {
        return $this->orderedUnitNetPrice;
    }

    /**
     * @param float $orderedUnitNetPrice
     */
    public function setOrderedUnitNetPrice($orderedUnitNetPrice)
    {
        $this->orderedUnitNetPrice = $orderedUnitNetPrice;
    }

    /**
     * @return float
     */
    public function getOrderUnitRetailPrice()
    {
        return $this->orderUnitRetailPrice;
    }

    /**
     * @param float $orderUnitRetailPrice
     */
    public function setOrderUnitRetailPrice($orderUnitRetailPrice)
    {
        $this->orderUnitRetailPrice = $orderUnitRetailPrice;
    }

    /**
     * @return string
     */
    public function getOrderedCurrency()
    {
        return $this->orderedCurrency;
    }

    /**
     * @param string $orderedCurrency
     */
    public function setOrderedCurrency($orderedCurrency)
    {
        $this->orderedCurrency = $orderedCurrency;
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
        $this->expectedDeliveryDate = $expectedDeliveryDate->format('Y-m-d');
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
    public function getExpirationDate()
    {
        return $this->expirationDate ? date_create($this->expirationDate) : null;
    }

    /**
     * @param \DateTime $expirationDate
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate->format('Y-m-d');
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
     * @return float
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    /**
     * @param string $packageNumber
     */
    public function setPackageNumber($packageNumber)
    {
        $this->packageNumber = $packageNumber;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param string $packageType
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
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
}
