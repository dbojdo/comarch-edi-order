<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Seller')]
final class Seller extends TaxAndAccountNumberAwareParty
{
    #[JMS\SerializedName('CodeByBuyer')]
    private ?string $codeByBuyer = null;

    #[JMS\SerializedName('Fax')]
    private ?string $fax = null;

    public function __construct(
        ?string $iln = null,
        ?string $taxId = null,
        ?string $accountNumber = null,
        ?string $name = null,
        ?string $streetAndNumber = null,
        ?string $cityName = null,
        ?string $postalCode = null,
        ?string $country = null,
        ?string $codeByBuyer = null,
        ?string $fax = null
    ) {
        parent::__construct($iln, $taxId, $accountNumber, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->codeByBuyer = $codeByBuyer;
        $this->fax = $fax;
    }

    public function getCodeByBuyer(): ?string
    {
        return $this->codeByBuyer;
    }

    public function setCodeByBuyer(?string $codeByBuyer): void
    {
        $this->codeByBuyer = $codeByBuyer;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }
}
