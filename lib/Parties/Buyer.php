<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Buyer')]
final class Buyer extends TaxAndAccountNumberAwareParty
{
    #[JMS\SerializedName('CourtAndCapitalInformation')]
    private ?string $courtAndCapitalInformation = null;

    #[JMS\SerializedName('ContactInformation')]
    private ?string $contactInformation = null;

    public function __construct(
        ?string $iln = null,
        ?string $taxId = null,
        ?string $accountNumber = null,
        ?string $name = null,
        ?string $streetAndNumber = null,
        ?string $cityName = null,
        ?string $postalCode = null,
        ?string $country = null,
        ?string $courtAndCapitalInformation = null,
        ?string $contactInformation = null
    ) {
        parent::__construct($iln, $taxId, $accountNumber, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->courtAndCapitalInformation = $courtAndCapitalInformation;
        $this->contactInformation = $contactInformation;
    }

    public function getCourtAndCapitalInformation(): ?string
    {
        return $this->courtAndCapitalInformation;
    }

    public function setCourtAndCapitalInformation(?string $courtAndCapitalInformation): void
    {
        $this->courtAndCapitalInformation = $courtAndCapitalInformation;
    }

    public function getContactInformation(): ?string
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?string $contactInformation): void
    {
        $this->contactInformation = $contactInformation;
    }
}
