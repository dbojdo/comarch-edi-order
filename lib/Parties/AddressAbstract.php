<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class AddressAbstract
{
    #[JMS\SerializedName('ILN')]
    private ?string $iln = null;

    #[JMS\SerializedName('Name')]
    private ?string $name = null;

    #[JMS\SerializedName('StreetAndNumber')]
    private ?string $streetAndNumber = null;

    #[JMS\SerializedName('CityName')]
    private ?string $cityName = null;

    #[JMS\SerializedName('PostalCode')]
    private ?string $postalCode = null;

    #[JMS\SerializedName('Country')]
    private ?string $country = null;

    public function __construct(
        ?string $iln = null,
        ?string $name = null,
        ?string $streetAndNumber = null,
        ?string $cityName = null,
        ?string $postalCode = null,
        ?string $country = null
    ) {
        $this->iln = $iln;
        $this->name = $name;
        $this->streetAndNumber = $streetAndNumber;
        $this->cityName = $cityName;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }

    public function getIln(): ?string
    {
        return $this->iln;
    }

    public function setIln(?string $iln): void
    {
        $this->iln = $iln;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getStreetAndNumber(): ?string
    {
        return $this->streetAndNumber;
    }

    public function setStreetAndNumber(?string $streetAndNumber): void
    {
        $this->streetAndNumber = $streetAndNumber;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): void
    {
        $this->cityName = $cityName;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
}
