<?php
namespace Webit\Comarch\EDI\Order\Model\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * 
 * @JMS\XmlRoot("Seller")
 */
class Seller extends PartyAbstract {
    /**
     * 
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("CodeByBuyer")
     */
    protected $codeByBuyer;
    
    /**
     * 
     * @var string
     * 
     * @JMS\Type("string")
     * @JMS\SerializedName("Fax")
     */
    protected $fax;
}
