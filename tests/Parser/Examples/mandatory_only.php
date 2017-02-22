<?php
$xml = <<<XML
<Document-Order>
    <Order-Header>
        <OrderNumber>OrderNumber_1</OrderNumber> 
        <OrderDate>2000-09-09</OrderDate>
        <DocumentFunctionCode>O</DocumentFunctionCode>
    </Order-Header>
    <Order-Parties>
        <Buyer>
            <ILN>1111111111111</ILN>
        </Buyer>
        <Seller>
            <ILN>1111111111116</ILN>
        </Seller>
    </Order-Parties>
    <Order-Lines>
        <Line>
            <Line-Item>
                <LineNumber>1</LineNumber>
                <EAN>1111111111123</EAN>
                <OrderedQuantity>2.000</OrderedQuantity>
            </Line-Item>
        </Line>
        <Line>
            <Line-Item>
                <LineNumber>2</LineNumber>
                <EAN>1111111111134</EAN>
                <OrderedQuantity>4.000</OrderedQuantity>
            </Line-Item>
        </Line>
    </Order-Lines>
    <Order-Summary>
        <TotalLines>2</TotalLines>
        <TotalOrderedAmount>6.000</TotalOrderedAmount>
    </Order-Summary> 
</Document-Order>
XML;

$document = new \Webit\Comarch\EDI\Order\DocumentOrder(
    new \Webit\Comarch\EDI\Order\OrderHeader(
        'OrderNumber_1',
        null,
        date_create('2000-09-09'),
        null,
        null,
        null,
        null,
        null,
        null,
        'O'
    ),
    new \Webit\Comarch\EDI\Order\OrderParties(
        new \Webit\Comarch\EDI\Order\Parties\Buyer(
            '1111111111111'
        ),
        array(),
        null,
        new \Webit\Comarch\EDI\Order\Parties\Seller(
            '1111111111116'
        )
    ),
    new \Webit\Comarch\EDI\Order\OrderLines(
        array(
            new \Webit\Comarch\EDI\Order\Lines\Line(
                new \Webit\Comarch\EDI\Order\Lines\LineItem(
                    1,
                    '1111111111123',
                    null,
                    null,
                    null,
                    null,
                    null,
                    2.0
                )
            ),
            new \Webit\Comarch\EDI\Order\Lines\Line(
                new \Webit\Comarch\EDI\Order\Lines\LineItem(
                    2,
                    '1111111111134',
                    null,
                    null,
                    null,
                    null,
                    null,
                    4.0
                )
            ),
        )
    ),
    new \Webit\Comarch\EDI\Order\OrderSummary(
        2,
        6.00
    )
);

return array($xml, $document);