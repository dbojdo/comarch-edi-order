<?php
namespace Webit\Comarch\EDI\Order;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
class OrderSummaryTest extends AbstractDocumentMemberTestCase
{
    public static function arguments(): array
    {
        return [
            [
                [
                    'totalLines' => null,
                    'totalOrderedAmount' => null,
                    'totalNetAmount' => null,
                ],
            ],
            [
                [
                    'totalLines' => 2,
                    'totalOrderedAmount' => 34.5,
                    'totalNetAmount' => 332.54,
                ],
            ],
            [
                [
                    'totalLines' => 2,
                    'totalOrderedAmount' => null,
                    'totalNetAmount' => 332.54,
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    protected function memberClass(): string
    {
        return OrderSummary::class;
    }
}
