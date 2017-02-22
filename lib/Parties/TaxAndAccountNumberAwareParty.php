<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class TaxAndAccountNumberAwareParty extends TaxAwareParty
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("AccountNumber")
     */
    private $accountNumber;

    public function __construct(
        $iln = null,
        $taxId = null,
        $accountNumber = null,
        $name = null,
        $streetAndNumber = null,
        $cityName = null,
        $postalCode = null,
        $country = null
    ) {
        parent::__construct($iln, $taxId, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->accountNumber = $accountNumber;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }
}
