<?php
namespace Webit\Comarch\EDI\Order;

use JMS\Serializer\Annotation as JMS;

/**
 * @see http://www.comarchedi.pl/files_pl/file_209/ORDER_XML_v20_20121106.pdf
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Document-Order")
 */
class DocumentOrder
{
    /**
     * @var OrderHeader
     * @JMS\Type("Webit\Comarch\EDI\Order\OrderHeader")
     * @JMS\SerializedName("Order-Header")
     */
    private $orderHeader;

    /**
     * @var OrderParties
     * @JMS\Type("Webit\Comarch\EDI\Order\OrderParties")
     * @JMS\SerializedName("Order-Parties")
     */
    private $orderParties;

    /**
     * @var OrderLines
     * @JMS\Type("Webit\Comarch\EDI\Order\OrderLines")
     * @JMS\SerializedName("Order-Lines")
     */
    private $orderLines;

    /**
     * @var OrderSummary
     * @JMS\Type("Webit\Comarch\EDI\Order\OrderSummary")
     * @JMS\SerializedName("Order-Summary")
     */
    private $orderSummary;

    /**
     * DocumentOrder constructor.
     * @param OrderHeader $orderHeader
     * @param OrderParties $orderParties
     * @param OrderLines $orderLines
     * @param OrderSummary $orderSummary
     */
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

    /**
     * @return OrderHeader
     */
    public function getOrderHeader()
    {
        return $this->orderHeader;
    }

    /**
     * @param OrderHeader $orderHeader            
     */
    public function setOrderHeader(OrderHeader $orderHeader)
    {
        $this->orderHeader = $orderHeader;
    }

    /**
     * @return OrderParties
     */
    public function getOrderParties()
    {
        return $this->orderParties;
    }

    /**
     * @param OrderParties $orderParties            
     */
    public function setOrderParties(OrderParties $orderParties)
    {
        $this->orderParties = $orderParties;
    }

    /**
     * @return OrderLines
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLines $orderLines            
     */
    public function setOrderLines(OrderLines $orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @return OrderSummary
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * @param OrderSummary $orderSummary            
     */
    public function setOrderSummary(OrderSummary $orderSummary)
    {
        $this->orderSummary = $orderSummary;
    }
}
