<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;
use Webit\Comarch\EDI\Order\Parties\AddressAbstract;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("DeliveryPoint")
 */
class DeliveryPoint extends AddressAbstract
{
}