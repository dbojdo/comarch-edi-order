<?php
namespace Webit\Comarch\EDI\Order\Model\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * 
 * @JMS\XmlRoot("Invoice")
 */
class Invoice extends AddressAbstract
{

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("TaxID")
     *     
     */
    protected $taxId;

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
}