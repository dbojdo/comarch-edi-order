<?php
namespace Webit\Comarch\EDI\Order\Model\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 *         @JMS\XmlRoot("Line-Item")
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
     * Numer linii
     *
     * @var int
     * 
     * @JMS\Type("integer")
     * @JMS\SerializedName("LineNumber")
     */
    protected $number;

    /**
     * EAN produktu
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("EAN")
     */
    protected $ean;

    /**
     * Kod produktu u kupującego
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("BuyerItemCode")
     */
    protected $buyerItemCode;

    /**
     * Kod produktu u sprzedającego
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("SupplierItemCode")
     */
    protected $supplierItemCode;

    /**
     * EAN opakowania
     *
     * @var int
     * 
     * @JMS\Type("integer")
     * @JMS\SerializedName("PackageEAN")
     */
    protected $packageEan;

    /**
     * Nazwa produktu
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("ItemDescription")
     */
    protected $description;

    /**
     * Identyfikator opakowania zwrotnego:
     * "CU" – jednostka handlowa
     * "RC" – opakowanie zwrotne
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("ItemType")
     */
    protected $type;

    /**
     * Zamawiana ilość
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedQuantity")
     */
    protected $orderedQuantity;

    /**
     * Zamawiana ilość darmowych produktów
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("FreeOrderedQuantity")
     */
    protected $freeOrderedQuantity;

    /**
     * Ilość sztuk detalicznych w opakowaniu handlowym
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitPacksize")
     */
    protected $orderedUnitPacksize;

    /**
     * Ilość fakturowana
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("InvoicedQuantity")
     */
    protected $invoicedQuantity;

    /**
     * Jednostka miary
     * "PCE" – sztuka
     * "KGM" – kilogram
     * "MTR" – metr
     * "MTK" – metr kwadratowy
     * "LTR" – litr
     * "PR" – para
     * "TNE" – tona metryczna
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("UnitOfMeasure")
     */
    protected $unitOfMeasure;

    /**
     * Cena netto
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitNetPrice")
     */
    protected $orderedUnitNetPrice;

    /**
     * Cena detaliczna netto
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("OrderedUnitRetailPrice")
     */
    protected $orderUnitRetailPrice;

    /**
     * Waluta zamawianej pozycji
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderCurrency")
     */
    protected $orderedCurrency;

    /**
     * Żądana data dostawy
     *
     * @var \DateTime
     * 
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("ExpectedDeliveryDate")
     */
    protected $expectedDeliveryDate;

    /**
     * Żądany czas dostawy
     *
     * @var \DateTime
     * 
     * @JMS\Type("DateTime<'H:i'>")
     * @JMS\SerializedName("ExpectedDeliveryTime")
     */
    protected $expectedDeliveryTime;

    /**
     * Data ważności
     *
     * @var \DateTime
     * 
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("ExpirationDate")
     */
    protected $expirationDate;

    /**
     * Kod transakcji promocyjnej
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("PromotionReference")
     */
    protected $promotionReference;

    /**
     * Liczba opakowań zamawianej pozycji
     *
     * @var float
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("PackageNumber")
     */
    protected $packageNumber;

    /**
     * Identyfikacja typu opakowania:
     * „CT” – karton
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("PackageType")
     */
    protected $packageType;

    /**
     * Uwagi
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("Remarks")
     */
    protected $remarks;

    /**
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     *
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     *
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     *
     * @return string
     */
    public function getBuyerItemCode()
    {
        return $this->buyerItemCode;
    }

    /**
     *
     * @param string $buyerItemCode
     */
    public function setBuyerItemCode($buyerItemCode)
    {
        $this->buyerItemCode = $buyerItemCode;
    }

    /**
     *
     * @return string
     */
    public function getSupplierItemCode()
    {
        return $this->supplierItemCode;
    }

    /**
     *
     * @param string $supplierItemCode
     */
    public function setSupplierItemCode($supplierItemCode)
    {
        $this->supplierItemCode = $supplierItemCode;
    }

    /**
     *
     * @return int
     */
    public function getPackageEan()
    {
        return $this->packageEan;
    }

    /**
     *
     * @param int $packageEan
     */
    public function setPackageEan($packageEan)
    {
        $this->packageEan = $packageEan;
    }

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     *
     * @return float
     */
    public function getOrderedQuantity()
    {
        return $this->orderedQuantity;
    }

    /**
     *
     * @param float $orderedQuantity
     */
    public function setOrderedQuantity($orderedQuantity)
    {
        $this->orderedQuantity = $orderedQuantity;
    }

    /**
     *
     * @return float
     */
    public function getFreeOrderedQuantity()
    {
        return $this->freeOrderedQuantity;
    }

    /**
     *
     * @param float $freeOrderedQuantity
     */
    public function setFreeOrderedQuantity($freeOrderedQuantity)
    {
        $this->freeOrderedQuantity = $freeOrderedQuantity;
    }

    /**
     *
     * @return float
     */
    public function getOrderedUnitPacksize()
    {
        return $this->orderedUnitPacksize;
    }

    /**
     *
     * @param float $orderedUnitPacksize
     */
    public function setOrderedUnitPacksize($orderedUnitPacksize)
    {
        $this->orderedUnitPacksize = $orderedUnitPacksize;
    }

    /**
     *
     * @return float
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     *
     * @param float $invoicedQuantity
     */
    public function setInvoicedQuantity($invoicedQuantity)
    {
        $this->invoicedQuantity = $invoicedQuantity;
    }

    /**
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     *
     * @param string $unitOfMeasure
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
    }

    /**
     *
     * @return float
     */
    public function getOrderedUnitNetPrice()
    {
        return $this->orderedUnitNetPrice;
    }

    /**
     *
     * @param float $orderedUnitNetPrice
     */
    public function setOrderedUnitNetPrice($orderedUnitNetPrice)
    {
        $this->orderedUnitNetPrice = $orderedUnitNetPrice;
    }

    /**
     *
     * @return float
     */
    public function getOrderUnitRetailPrice()
    {
        return $this->orderUnitRetailPrice;
    }

    /**
     *
     * @param float $orderUnitRetailPrice
     */
    public function setOrderUnitRetailPrice($orderUnitRetailPrice)
    {
        $this->orderUnitRetailPrice = $orderUnitRetailPrice;
    }

    /**
     *
     * @return string
     */
    public function getOrderedCurrency()
    {
        return $this->orderedCurrency;
    }

    /**
     *
     * @param string $orderedCurrency
     */
    public function setOrderedCurrency($orderedCurrency)
    {
        $this->orderedCurrency = $orderedCurrency;
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
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     *
     * @param \DateTime $expirationDate            
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
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
     * @return float
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    /**
     *
     * @param string $packageNumber
     */
    public function setPackageNumber($packageNumber)
    {
        $this->packageNumber = $packageNumber;
    }

    /**
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     *
     * @param string $packageType
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
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
}
