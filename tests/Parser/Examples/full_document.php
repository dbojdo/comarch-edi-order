<?php
$xml = <<<XML
<Document-Order>
    <Order-Header>
        <OrderNumber>OrderNumber_1</OrderNumber>
        <VendorOrderNumber>Vendor-order-number</VendorOrderNumber> 
        <OrderDate>2000-09-09</OrderDate>
        <OrderTime>05:30</OrderTime>
        <ExpectedDeliveryDate>2000-09-10</ExpectedDeliveryDate>
        <ExpectedDeliveryTime>07:30</ExpectedDeliveryTime>
        <CollectionDate>2000-09-11</CollectionDate>
        <CollectionTime>08:30</CollectionTime>
        <PromotionReference>260</PromotionReference>
        <DocumentFunctionCode>O</DocumentFunctionCode>
        <MessageType>OD</MessageType>
        <Remarks>RemarksText</Remarks>
        <OrderCurrency>PLN</OrderCurrency>
        <Payment>
            <PaymentTerms>
                <PaymentDescription>OPIS</PaymentDescription>
                <Percentage>12.00</Percentage>
                <PaymentDate>2000-10-12</PaymentDate>
            </PaymentTerms>
        </Payment>
        <Delivery>
            <DeliveryTerms>
                <DeliveryTermsCode>CFR</DeliveryTermsCode>
                <DeliveryTermsDescription>DeliveryTermsDescription_1</DeliveryTermsDescription>
            </DeliveryTerms>
        </Delivery>
    </Order-Header>
    <Order-Parties>
        <Buyer>
            <ILN>1111111111111</ILN>
            <TaxID>111122223344</TaxID>
            <AccountNumber>AccountNumber_1</AccountNumber>
            <Name>ABC</Name>
            <StreetAndNumber>Przemysłowa 5</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
            <CourtAndCapitalInformation>KRS11111</CourtAndCapitalInformation>
            <ContactInformation>Jan Kowalski</ContactInformation>
        </Buyer>
        <BuyerHeadquarters>
            <ILN>1111111111122</ILN>
            <Name>CBA</Name>
            <StreetAndNumber>Przemysłowa 8</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode> 
            <Country>PL</Country>
        </BuyerHeadquarters>
        <BuyerHeadquarters>
            <ILN>1111111111123</ILN>
            <Name>DEF</Name>
            <StreetAndNumber>Przemysłowa 12</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode> 
            <Country>PL</Country>
        </BuyerHeadquarters>
        <Invoicee>
            <ILN>1111111111124</ILN>
            <TaxID>111122223344</TaxID>
            <Name>ABC</Name>
            <StreetAndNumber>Przemysłowa 18</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </Invoicee>
        <Seller>
            <ILN>1111111111116</ILN>
            <TaxID>111122223386</TaxID>
            <AccountNumber>AccountNumber_22</AccountNumber>
            <Name>Seller name</Name>
            <StreetAndNumber>Przemysłowa 20</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
            <CodeByBuyer>Z111</CodeByBuyer>
            <Fax>1213245783</Fax>
        </Seller>
        <DeliveryPoint>
            <ILN>1111111111119</ILN>
            <Name>Delivery point</Name>
            <StreetAndNumber>Przemysłowa 40</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </DeliveryPoint>
        <ShipFrom>
            <ILN>1111111111120</ILN>
            <Name>RST</Name>
            <StreetAndNumber>Przemysłowa 100</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </ShipFrom> 
        <UltimateCustomer>
            <ILN>1111111111119</ILN>
            <Name>OPQ</Name>
            <StreetAndNumber>Przemysłowa 98</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </UltimateCustomer>
        <Carrier>
            <ILN>1111111111127</ILN>
            <ModeOfTransport>30</ModeOfTransport>
        </Carrier>
        <OrderedBy>
            <ILN>1111111111134</ILN>
            <TaxID>111122224344</TaxID>
            <AccountNumber>AccountNumber_8</AccountNumber>
            <Name>FGH</Name>
            <StreetAndNumber>Handlowa 3</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-519</PostalCode>
            <Country>PL</Country>
        </OrderedBy> 
        <Sender>
            <ILN>1111111111198</ILN>
            <TaxID>111122223344</TaxID>
            <Name>IJK</Name>
            <StreetAndNumber>Przemysłowa 5</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </Sender>
        <Receiver>
            <ILN>1111111111156</ILN>
            <TaxID>111122223344</TaxID>
            <Name>LNM</Name>
            <StreetAndNumber>Przemysłowa 5</StreetAndNumber>
            <CityName>Kraków</CityName>
            <PostalCode>30-009</PostalCode>
            <Country>PL</Country>
        </Receiver> 
    </Order-Parties>
    <Order-Lines>
        <Line>
            <Line-Item>
                <LineNumber>1</LineNumber>
                <EAN>1111111111123</EAN>
                <BuyerItemCode>123456</BuyerItemCode>
                <SupplierItemCode>123456</SupplierItemCode>
                <PackageEAN>11111111111112</PackageEAN>
                <ItemDescription>ItemDescription_1</ItemDescription>
                <ItemType>RC</ItemType>
                <OrderedQuantity>2.000</OrderedQuantity>
                <FreeOrderedQuantity>0.000</FreeOrderedQuantity>
                <OrderedUnitPacksize>1.000</OrderedUnitPacksize>
                <InvoicedQuantity>2.000</InvoicedQuantity>
                <UnitOfMeasure>KGM</UnitOfMeasure>
                <OrderedUnitNetPrice>23.45</OrderedUnitNetPrice>
                <OrderedUnitRetailPrice>23.45</OrderedUnitRetailPrice>
                <OrderCurrency>PLN</OrderCurrency>
                <ExpectedDeliveryDate>1999-09-09</ExpectedDeliveryDate>
                <ExpectedDeliveryTime>07:30</ExpectedDeliveryTime>
                <ExpirationDate>1999-09-09</ExpirationDate>
                <PromotionReference>260</PromotionReference>
                <PackageNumber>1.000</PackageNumber>
                <PackageType>CT</PackageType>
                <Remarks>RemarksText</Remarks>
            </Line-Item>
            <Line-Parties>
                <DeliveryPoint>
                    <ILN>1111111111111</ILN>
                    <Name>Delivery point</Name>
                    <StreetAndNumber>Przemysłowa 5</StreetAndNumber>
                    <CityName>Kraków</CityName>
                    <PostalCode>30-009</PostalCode>
                    <Country>PL</Country> 
                </DeliveryPoint>
            </Line-Parties>
        </Line>
        <Line>
            <Line-Item>
                <LineNumber>2</LineNumber>
                <EAN>1111111111134</EAN>
                <BuyerItemCode>123487</BuyerItemCode>
                <SupplierItemCode>123412</SupplierItemCode>
                <PackageEAN>1111111111143</PackageEAN>
                <ItemDescription>ItemDescription_2</ItemDescription>
                <ItemType>RC</ItemType>
                <OrderedQuantity>4.000</OrderedQuantity>
                <FreeOrderedQuantity>0.000</FreeOrderedQuantity>
                <OrderedUnitPacksize>1.000</OrderedUnitPacksize>
                <InvoicedQuantity>4.000</InvoicedQuantity>
                <UnitOfMeasure>KGM</UnitOfMeasure>
                <OrderedUnitNetPrice>45.45</OrderedUnitNetPrice>
                <OrderedUnitRetailPrice>50.45</OrderedUnitRetailPrice>
                <OrderCurrency>PLN</OrderCurrency>
                <ExpectedDeliveryDate>1999-09-09</ExpectedDeliveryDate>
                <ExpectedDeliveryTime>07:30</ExpectedDeliveryTime>
                <ExpirationDate>1999-09-09</ExpirationDate>
                <PromotionReference>260</PromotionReference>
                <PackageNumber>1.000</PackageNumber>
                <PackageType>CT</PackageType>
                <Remarks>RemarksText Item 2</Remarks>
            </Line-Item>
            <Line-Parties>
                <DeliveryPoint>
                    <ILN>1111111111111</ILN>
                    <Name>Delivery point</Name>
                    <StreetAndNumber>Przemysłowa 5</StreetAndNumber>
                    <CityName>Kraków</CityName>
                    <PostalCode>30-009</PostalCode>
                    <Country>PL</Country> 
                </DeliveryPoint>
            </Line-Parties>
        </Line>
    </Order-Lines>
    <Order-Summary>
        <TotalLines>2</TotalLines>
        <TotalOrderedAmount>6.000</TotalOrderedAmount>
        <TotalNetAmount>46.90</TotalNetAmount>
    </Order-Summary> 
</Document-Order>
XML;

$document = new \Webit\Comarch\EDI\Order\DocumentOrder(
    new \Webit\Comarch\EDI\Order\OrderHeader(
        'OrderNumber_1',
        'Vendor-order-number',
        date_create('2000-09-09'),
        date_create('05:30'),
        date_create('2000-09-10'),
        date_create('07:30'),
        date_create('2000-09-11'),
        date_create('08:30'),
        '260',
        'O',
        'OD',
        'RemarksText',
        'PLN',
        new \Webit\Comarch\EDI\Order\Header\Payment(
            new \Webit\Comarch\EDI\Order\Header\PaymentTerms(
                'OPIS',
                12.00,
                date_create('2000-10-12')
            )
        ),
        new \Webit\Comarch\EDI\Order\Header\Delivery(
            new \Webit\Comarch\EDI\Order\Header\DeliveryTerms(
                'CFR',
                'DeliveryTermsDescription_1'
            )
        )
    ),
    new \Webit\Comarch\EDI\Order\OrderParties(
        new \Webit\Comarch\EDI\Order\Parties\Buyer(
            '1111111111111',
            '111122223344',
            'AccountNumber_1',
            'ABC',
            'Przemysłowa 5',
            'Kraków',
            '30-009',
            'PL',
            'KRS11111',
            'Jan Kowalski'
        ),
        array(
            new \Webit\Comarch\EDI\Order\Parties\BuyerHeadquarters(
                '1111111111122',
                'CBA',
                'Przemysłowa 8',
                'Kraków',
                '30-009',
                'PL'
            ),
            new \Webit\Comarch\EDI\Order\Parties\BuyerHeadquarters(
                '1111111111123',
                'DEF',
                'Przemysłowa 12',
                'Kraków',
                '30-009',
                'PL'
            )
        ),
        new \Webit\Comarch\EDI\Order\Parties\Invoicee(
            '1111111111124',
            '111122223344',
            'ABC',
            'Przemysłowa 18',
            'Kraków',
            '30-009',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\Seller(
            '1111111111116',
            '111122223386',
            'AccountNumber_22',
            'Seller name',
            'Przemysłowa 20',
            'Kraków',
            '30-009',
            'PL',
            'Z111',
            '1213245783'
        ),
        new \Webit\Comarch\EDI\Order\Parties\DeliveryPoint(
            '1111111111119',
            'Delivery point',
            'Przemysłowa 40',
            'Kraków',
            '30-009',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\ShipFrom(
            '1111111111120',
            'RST',
            'Przemysłowa 100',
            'Kraków',
            '30-009',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\UltimateCustomer(
            '1111111111119',
            'OPQ',
            'Przemysłowa 98',
            'Kraków',
            '30-009',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\Carrier(
            '1111111111127',
            30
        ),
        new \Webit\Comarch\EDI\Order\Parties\OrderedBy(
            '1111111111134',
            '111122224344',
            'AccountNumber_8',
            'FGH',
            'Handlowa 3',
            'Kraków',
            '30-519',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\Sender(
            '1111111111198',
            '111122223344',
            'IJK',
            'Przemysłowa 5',
            'Kraków',
            '30-009',
            'PL'
        ),
        new \Webit\Comarch\EDI\Order\Parties\Receiver(
            '1111111111156',
            '111122223344',
            'LNM',
            'Przemysłowa 5',
            'Kraków',
            '30-009',
            'PL'
        )
    ),
    new \Webit\Comarch\EDI\Order\OrderLines(
        array(
            new \Webit\Comarch\EDI\Order\Lines\Line(
                new \Webit\Comarch\EDI\Order\Lines\LineItem(
                    1,
                    '1111111111123',
                    '123456',
                    '123456',
                    '11111111111112',
                    'ItemDescription_1',
                    'RC',
                    2.0,
                    0.0,
                    1.0,
                    2.0,
                    'KGM',
                    23.45,
                    23.45,
                    'PLN',
                    date_create('1999-09-09'),
                    date_create('07:30'),
                    date_create('1999-09-09'),
                    '260',
                    1.000,
                    'CT',
                    'RemarksText'
                ),
                new \Webit\Comarch\EDI\Order\Lines\LineParties(
                    new \Webit\Comarch\EDI\Order\Lines\DeliveryPoint(
                        '1111111111111',
                        'Delivery point',
                        'Przemysłowa 5',
                        'Kraków',
                        '30-009',
                        'PL'
                    )
                )
            ),
            new \Webit\Comarch\EDI\Order\Lines\Line(
                new \Webit\Comarch\EDI\Order\Lines\LineItem(
                    2,
                    '1111111111134',
                    '123487',
                    '123412',
                    '1111111111143',
                    'ItemDescription_2',
                    'RC',
                    4.0,
                    0.0,
                    1.0,
                    4.0,
                    'KGM',
                    45.45,
                    50.45,
                    'PLN',
                    date_create('1999-09-09'),
                    date_create('07:30'),
                    date_create('1999-09-09'),
                    '260',
                    1.000,
                    'CT',
                    'RemarksText Item 2'
                ),
                new \Webit\Comarch\EDI\Order\Lines\LineParties(
                    new \Webit\Comarch\EDI\Order\Lines\DeliveryPoint(
                        '1111111111111',
                        'Delivery point',
                        'Przemysłowa 5',
                        'Kraków',
                        '30-009',
                        'PL'
                    )
                )
            ),
        )
    ),
    new \Webit\Comarch\EDI\Order\OrderSummary(
        2,
        6.00,
        46.90
    )
);

return array($xml, $document);