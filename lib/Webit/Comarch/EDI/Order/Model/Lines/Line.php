<?php
namespace Webit\Comarch\EDI\Order\Model\Lines;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 * 
 * @JMS\XmlRoot("Line")
 */
class Line
{

    /**
     *
     * @var array<LineItem>
     * 
     * @JMS\Type("array<Webit\Comarch\EDI\Order\Model\Lines\LineItem>")
     * @JMS\XmlList(inline=true, entry="Line-Item")
     */
    protected $items;

    /**
     * 
     * @var LineParties
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\Lines\LineParties")
     * @JMS\SerializedName("Line-Parties")
     */
    protected $parties;
    
    /**
     *
     * @return array<LineItem>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     *
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
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
