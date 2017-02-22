# Comarch EDI Order

This library provides the object oriented representation of the ***Comarch EDI Order*** document 
along with its the XML parser.

## Installation

The most convenient method is using Composer.
Add the following line to the **required** section of your **composer.json**

    "webit/comarch-edi-order": "^2.0.0"

## Usage

### XML Parser

```php
<?php
use Doctrine\Common\Annotations\AnnotationRegistry;

// Configure the AnnotationRegistry
$autoload = include 'vendor/autoload.php'; 
AnnotationRegistry::registerLoader(array($autoload, 'loadClass'));

$xmlParserBuilder = new \Webit\Comarch\EDI\Order\Parser\XmlParserBuilder();
$xmlParserBuilder->setCacheDir(sys_get_temp_dir()); // recommended to set the cache dir for the inner Serializer

/** @var \Webit\Comarch\EDI\Order\Parser\XmlParser $xmlParser */
$xmlParser = $xmlParserBuilder->build();

$myOrder = file_get_contents('my-edi-order.xml');

/** @var \Webit\Comarch\EDI\Order\DocumentOrder $documentOrder */
$documentOrder = $xmlParser->parse($myOrder);

```

### XML File Parser

Optionally you can wrap the XMLParser with the XMLFileParser

```php
<?php

/** @var \Webit\Comarch\EDI\Order\Parser\XmlParser $xmlParser */

$xmlFileParser = new \Webit\Comarch\EDI\Order\Parser\XmlFileParser($xmlParser);
$documentOrder = $xmlFileParser->parse(new \SplFileInfo('my-edi-order.xml'));

```

## Supported document versions

The current implementation supports version ***2.2*** as states in the [spec](http://www.comarchedi.pl/files_pl/file_233/ORDER_XML_v22_20161122.pdf)


## Running the tests

```bash
./vendor/bin/phpunit
```
