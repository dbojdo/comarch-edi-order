<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class TaxAwareParty extends AddressAbstract
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("TaxID")
     */
    private $taxId;

    public function __construct(
        $iln = null,
        $taxId = null,
        $name = null,
        $streetAndNumber = null,
        $cityName = null,
        $postalCode = null,
        $country = null
    ) {
        parent::__construct($iln, $name, $streetAndNumber, $cityName, $postalCode, $country);
        $this->taxId = $taxId;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @param string $taxId
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
    }
}