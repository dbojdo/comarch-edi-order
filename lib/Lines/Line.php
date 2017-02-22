<?php
namespace Webit\Comarch\EDI\Order\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Line")
 */
class Line
{
    /**
     * @var LineItem
     * @JMS\Type("Webit\Comarch\EDI\Order\Lines\LineItem")
     * @JMS\SerializedName("Line-Item")
     */
    private $lineItem;

    /**
     * @var LineParties
     * @JMS\Type("Webit\Comarch\EDI\Order\Lines\LineParties")
     * @JMS\SerializedName("Line-Parties")
     */
    private $parties;

    /**
     * Line constructor.
     * @param LineItem $lineItem
     * @param LineParties $parties
     */
    public function __construct(LineItem $lineItem = null, LineParties $parties = null)
    {
        $this->lineItem = $lineItem;
        $this->parties = $parties;
    }

    /**
     * @return LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param LineItem $lineItem
     */
    public function setLineItem(LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
    }

	/**
	 * @return LineParties
	 */
	public function getParties()
	{
		return $this->parties;
	}
	
	/**
	 * @param LineParties $parties
	 */
	public function setParties(LineParties $parties)
	{
		$this->parties = $parties;
	}
}
