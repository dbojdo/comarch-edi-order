<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("OrderedBy")
 */
class OrderedBy extends TaxAndAccountNumberAwareParty
{
}
