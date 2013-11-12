<?php
namespace Webit\Comarch\EDI\Order\Model\Lines;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Model\Parties\AddressAbstract;

/**
 *
 * @author dbojdo
 * 
 * @JMS\XmlRoot("DeliveryPoint")
 */
class DeliveryPoint extends AddressAbstract {
    
}