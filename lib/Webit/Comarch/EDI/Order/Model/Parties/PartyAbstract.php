<?php
namespace Webit\Comarch\EDI\Order\Model\Parties;

abstract class PartyAbstract extends AddressAbstract
{

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("TaxID")
     */
    protected $taxId;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("AccountNumber")
     */
    protected $accountNumber;

    /**
     *
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("CourtAndCapitalInformation")
     */
    protected $courtAndCapitalInformation;

    /**
     *
     * @var string 
     * @JMS\Type("string")
     * @JMS\SerializedName("ContactInformation")
     */
    protected $contactInformation;

    /**
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     *
     * @param string $taxId
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
    }

    /**
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     *
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     *
     * @return string
     */
    public function getCourtAndCapitalInformation()
    {
        return $this->courtAndCapitalInformation;
    }

    /**
     *
     * @param string $courtAndCapitalInformation
     */
    public function setCourtAndCapitalInformation($courtAndCapitalInformation)
    {
        $this->courtAndCapitalInformation = $courtAndCapitalInformation;
    }

    /**
     *
     * @return string
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     *
     * @param string $contactInformation
     */
    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;
    }
}