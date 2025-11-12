<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class TaxAndAccountNumberAwareParty extends TaxAwareParty
{
    #[JMS\SerializedName('AccountNumber')]
    private ?string $accountNumber = null;

    public function __construct(
        ?string $iln = null,
        ?string $taxId = null,
        ?string $accountNumber = null,
        ?string $name = null,
        ?string $streetAndNumber = null,
        ?string $cityName = null,
        ?string $postalCode = null,
        ?string $country = null
    ) {
        parent::__construct($iln, $taxId, $name, $streetAndNumber, $cityName, $postalCode, $country);

        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }
}
