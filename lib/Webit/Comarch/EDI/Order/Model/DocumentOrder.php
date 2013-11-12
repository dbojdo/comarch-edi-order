<?php
namespace Webit\Comarch\EDI\Order\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @see http://www.comarchedi.pl/files_pl/file_209/ORDER_XML_v20_20121106.pdf
 * @author dbojdo
 * @JMS\XmlRoot("Document-Order")
 */
class DocumentOrder
{

    /**
     *
     * @var OrderHeader
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\OrderHeader")
     * @JMS\SerializedName("Order-Header")
     */
    protected $orderHeader;

    /**
     *
     * @var OrderParties
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\OrderParties")
     * @JMS\SerializedName("Order-Parties")
     */
    protected $orderParties;

    /**
     *
     * @var OrderLines 
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\OrderLines")
     * @JMS\SerializedName("Order-Lines")
     */
    protected $orderLines;

    /**
     *
     * @var OrderSummary
     * 
     * @JMS\Type("Webit\Comarch\EDI\Order\Model\OrderSummary")
     * @JMS\SerializedName("Order-Summary")
     */
    protected $orderSummary;

    /**
     *
     * @return OrderHeader
     */
    public function getOrderHeader()
    {
        return $this->orderHeader;
    }

    /**
     *
     * @param OrderHeader $orderHeader            
     */
    public function setOrderHeader(OrderHeader $orderHeader)
    {
        $this->orderHeader = $orderHeader;
    }

    /**
     *
     * @return OrderParties
     */
    public function getOrderParties()
    {
        return $this->orderParties;
    }

    /**
     *
     * @param OrderParties $orderParties            
     */
    public function setOrderParties(OrderParties $orderParties)
    {
        $this->orderParties = $orderParties;
    }

    /**
     *
     * @return OrderLines
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     *
     * @param OrderLines $orderLines            
     */
    public function setOrderLines(OrderLines $orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     *
     * @return OrderSummary
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     *
     * @param OrderSummary $orderSummary            
     */
    public function setOrderSummary(OrderSummary $orderSummary)
    {
        $this->orderSummary = $orderSummary;
    }
}
