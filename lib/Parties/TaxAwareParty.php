<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class TaxAwareParty extends AddressAbstract
{
    #[JMS\SerializedName('TaxID')]
    private ?string $taxId = null;

    public function __construct(
        ?string $iln = null,
        ?string $taxId = null,
        ?string $name = null,
        ?string $streetAndNumber = null,
        ?string $cityName = null,
        ?string $postalCode = null,
        ?string $country = null
    ) {
        parent::__construct($iln, $name, $streetAndNumber, $cityName, $postalCode, $country);
        $this->taxId = $taxId;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): void
    {
        $this->taxId = $taxId;
    }
}
