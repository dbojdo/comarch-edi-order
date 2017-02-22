<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Order-Summary")
 */
class OrderSummary
{
    /**
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("TotalLines")
     */
    private $totalLines;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("TotalOrderedAmount")
     */
    private $totalOrderedAmount;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("TotalNetAmount")
     */
    private $totalNetAmount;

    /**
     * OrderSummary constructor.
     * @param int $totalLines
     * @param float $totalOrderedAmount
     * @param float $totalNetAmount
     */
    public function __construct($totalLines = null, $totalOrderedAmount = null, $totalNetAmount = null)
    {
        $this->totalLines = $totalLines;
        $this->totalOrderedAmount = $totalOrderedAmount;
        $this->totalNetAmount = $totalNetAmount;
    }

    /**
     * @return int
     */
    public function getTotalLines()
    {
        return $this->totalLines;
    }

    /**
     * @param int $totalLines
     */
    public function setTotalLines($totalLines)
    {
        $this->totalLines = $totalLines;
    }

    /**
     * @return float
     */
    public function getTotalOrderedAmount()
    {
        return $this->totalOrderedAmount;
    }

    /**
     * @param float $totalOrderedAmount
     */
    public function setTotalOrderedAmount($totalOrderedAmount)
    {
        $this->totalOrderedAmount = $totalOrderedAmount;
    }

    /**
     * @return float
     */
    public function getTotalNetAmount()
    {
        return $this->totalNetAmount;
    }

    /**
     * @param float $totalNetAmount
     */
    public function setTotalNetAmount($totalNetAmount)
    {
        $this->totalNetAmount = $totalNetAmount;
    }
}
