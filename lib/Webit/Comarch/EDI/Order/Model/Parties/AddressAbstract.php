<?php
namespace Webit\Comarch\EDI\Order\Model\Parties;

use JMS\Serializer\Annotation as JMS;

abstract class AddressAbstract
{

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("ILN")
     */
    protected $iln;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    protected $name;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("StreetAndNumber")
     */
    protected $streetAndNumber;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("CityName")
     */
    protected $cityName;

    /**
     *
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("PostalCode")
     */
    protected $postalCode;

    /**
     *
     * @var string @JMS\Type("string")
     *      @JMS\SerializedName("Country")
     */
    protected $country;

    /**
     *
     * @return int
     */
    public function getIln()
    {
        return $this->iln;
    }

    /**
     *
     * @param int $iln
     */
    public function setIln($iln)
    {
        $this->iln = $iln;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function getStreetAndNumber()
    {
        return $this->streetAndNumber;
    }

    /**
     *
     * @param string $streetAndNumber
     */
    public function setStreetAndNumber($streetAndNumber)
    {
        $this->streetAndNumber = $streetAndNumber;
    }

    /**
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     *
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}