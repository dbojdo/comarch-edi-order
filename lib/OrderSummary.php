<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Order-Summary')]
final class OrderSummary
{
    #[JMS\SerializedName('TotalLines')]
    private ?int $totalLines = null;

    #[JMS\SerializedName('TotalOrderedAmount')]
    private ?float $totalOrderedAmount = null;

    #[JMS\SerializedName('TotalNetAmount')]
    private ?float $totalNetAmount = null;

    public function __construct(?int $totalLines = null, ?float $totalOrderedAmount = null, ?float $totalNetAmount = null)
    {
        $this->totalLines = $totalLines;
        $this->totalOrderedAmount = $totalOrderedAmount;
        $this->totalNetAmount = $totalNetAmount;
    }

    public function getTotalLines(): ?int
    {
        return $this->totalLines;
    }

    public function setTotalLines(?int $totalLines): void
    {
        $this->totalLines = $totalLines;
    }

    public function getTotalOrderedAmount(): ?float
    {
        return $this->totalOrderedAmount;
    }

    public function setTotalOrderedAmount(?float $totalOrderedAmount): void
    {
        $this->totalOrderedAmount = $totalOrderedAmount;
    }

    public function getTotalNetAmount(): ?float
    {
        return $this->totalNetAmount;
    }

    public function setTotalNetAmount(?float $totalNetAmount): void
    {
        $this->totalNetAmount = $totalNetAmount;
    }
}
