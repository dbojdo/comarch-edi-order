<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
abstract class AddressAbstract
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("ILN")
     */
    private $iln;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("StreetAndNumber")
     */
    private $streetAndNumber;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CityName")
     */
    private $cityName;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PostalCode")
     */
    private $postalCode;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Country")
     */
    private $country;

    /**
     * AddressAbstract constructor.
     * @param string $iln
     * @param string $name
     * @param string $streetAndNumber
     * @param string $cityName
     * @param string $postalCode
     * @param string $country
     */
    public function __construct(
        $iln = null,
        $name = null,
        $streetAndNumber = null,
        $cityName = null,
        $postalCode = null,
        $country = null
    ) {
        $this->iln = $iln;
        $this->name = $name;
        $this->streetAndNumber = $streetAndNumber;
        $this->cityName = $cityName;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getIln()
    {
        return $this->iln;
    }

    /**
     * @param string $iln
     */
    public function setIln($iln)
    {
        $this->iln = $iln;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStreetAndNumber()
    {
        return $this->streetAndNumber;
    }

    /**
     * @param string $streetAndNumber
     */
    public function setStreetAndNumber($streetAndNumber)
    {
        $this->streetAndNumber = $streetAndNumber;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}
