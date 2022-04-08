<?php
namespace Webit\Comarch\EDI\Order;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class OrderSummaryTest extends AbstractDocumentMemberTest
{
    /**
     * @return array
     */
    public function arguments()
    {
        return array(
            array(
                array(),
            ),
            array(
                array(
                    'totalLines' => 2,
                    'totalOrderedAmount' => 34.5,
                    'totalNetAmount' => 332.54
                ),
            ),
            array(
                array(
                    'totalLines' => 2,
                    'totalOrderedAmount' => null,
                    'totalNetAmount' => 332.54
                ),
            )
        );
    }

    /**
     * @return string
     */
    protected function memberClass()
    {
        return OrderSummary::class;
    }
}
