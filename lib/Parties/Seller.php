<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Seller")
 */
class Seller extends TaxAndAccountNumberAwareParty
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CodeByBuyer")
     */
    private $codeByBuyer;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Fax")
     */
    private $fax;

    public function __construct(
        $iln = null,
        $taxId = null,
        $accountNumber = null,
        $name = null,
        $streetAndNumber = null,
        $cityName = null,
        $postalCode = null,
        $country = null,
        $codeByBuyer = null,
        $fax = null
    ) {
        parent::__construct($iln, $taxId, $accountNumber, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->codeByBuyer = $codeByBuyer;
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getCodeByBuyer()
    {
        return $this->codeByBuyer;
    }

    /**
     * @param string $codeByBuyer
     */
    public function setCodeByBuyer($codeByBuyer)
    {
        $this->codeByBuyer = $codeByBuyer;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
}
