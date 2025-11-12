<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;

/**
 * @see http://www.comarchedi.pl/files_pl/file_209/ORDER_XML_v20_20121106.pdf
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Document-Order')]
final class DocumentOrder
{
    #[JMS\SerializedName('Order-Header')]
    private ?OrderHeader $orderHeader = null;

    #[JMS\SerializedName('Order-Parties')]
    private ?OrderParties $orderParties = null;

    #[JMS\SerializedName('Order-Lines')]
    private ?OrderLines $orderLines = null;

    #[JMS\SerializedName('Order-Summary')]
    private ?OrderSummary $orderSummary = null;

    public function __construct(
        OrderHeader $orderHeader = null,
        OrderParties $orderParties = null,
        OrderLines $orderLines = null,
        OrderSummary $orderSummary = null
    ) {
        $this->orderHeader = $orderHeader;
        $this->orderParties = $orderParties;
        $this->orderLines = $orderLines;
        $this->orderSummary = $orderSummary;
    }

    public function getOrderHeader(): ?OrderHeader
    {
        return $this->orderHeader;
    }

    public function setOrderHeader(OrderHeader $orderHeader): void
    {
        $this->orderHeader = $orderHeader;
    }

    public function getOrderParties(): ?OrderParties
    {
        return $this->orderParties;
    }

    public function setOrderParties(OrderParties $orderParties): void
    {
        $this->orderParties = $orderParties;
    }

    public function getOrderLines(): ?OrderLines
    {
        return $this->orderLines;
    }

    public function setOrderLines(OrderLines $orderLines): void
    {
        $this->orderLines = $orderLines;
    }

    public function getOrderSummary(): ?OrderSummary
    {
        return $this->orderSummary;
    }

    public function setOrderSummary(OrderSummary $orderSummary): void
    {
        $this->orderSummary = $orderSummary;
    }
}
