<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Buyer")
 */
class Buyer extends TaxAndAccountNumberAwareParty
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CourtAndCapitalInformation")
     */
    private $courtAndCapitalInformation;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ContactInformation")
     */
    private $contactInformation;

    public function __construct(
        $iln = null,
        $taxId = null,
        $accountNumber = null,
        $name = null,
        $streetAndNumber = null,
        $cityName = null,
        $postalCode = null,
        $country = null,
        $courtAndCapitalInformation = null,
        $contactInformation = null
    ) {
        parent::__construct($iln, $taxId, $accountNumber, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->courtAndCapitalInformation = $courtAndCapitalInformation;
        $this->contactInformation = $contactInformation;
    }

    /**
     * @return string
     */
    public function getCourtAndCapitalInformation()
    {
        return $this->courtAndCapitalInformation;
    }

    /**
     * @param string $courtAndCapitalInformation
     */
    public function setCourtAndCapitalInformation($courtAndCapitalInformation)
    {
        $this->courtAndCapitalInformation = $courtAndCapitalInformation;
    }

    /**
     * @return string
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     * @param string $contactInformation
     */
    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;
    }
}
