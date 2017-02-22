<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("DeliveryTerms")
 */
class DeliveryTerms
{
    /**
     * Kod warunków dostawy lub transportu (INCOTERMS)
     * @var string
     */
    const DELIVERY_CODE_EX_WORKS = "EXW";
    const DELIVERY_CODE_FOR = "FOR";
    const DELIVERY_CODE_CPT = "CPT";
    
    /**
     * Kod warunków dostawy lub transportu (INCOTERMS): 
     * „EXW” – ex works 
     * „FOR” – przekazanie przewoźnikowi w określonym miejscu 
     * „CPT” – opłacone do miejsca dostawy
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryTermsCode")
     */
    private $code;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryTermsDescription")
     */
    private $description;

    /**
     * DeliveryTerms constructor.
     * @param string $code
     * @param string $description
     */
    public function __construct($code = null, $description = null)
    {
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
