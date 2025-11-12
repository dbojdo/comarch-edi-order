<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Line')]
final class Line
{
    public function __construct(
        #[JMS\SerializedName('Line-Item')]
        private ?LineItem $lineItem = null,
        #[JMS\SerializedName('Line-Parties')]
        private ?LineParties $parties = null,
    ) {
    }

    public function getLineItem(): ?LineItem
    {
        return $this->lineItem;
    }

    public function setLineItem(?LineItem $lineItem): void
    {
        $this->lineItem = $lineItem;
    }

	public function getParties(): ?LineParties
	{
		return $this->parties;
	}

	public function setParties(?LineParties $parties): void
	{
		$this->parties = $parties;
	}
}
