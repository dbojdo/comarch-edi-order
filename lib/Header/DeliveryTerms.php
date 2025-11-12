<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('DeliveryTerms')]
final class DeliveryTerms
{
    /**
     * Kod warunków dostawy lub transportu (INCOTERMS)
     * @var string
     */
    public const string DELIVERY_CODE_EX_WORKS = "EXW";
    public const string  DELIVERY_CODE_FOR = "FOR";
    public const string  DELIVERY_CODE_CPT = "CPT";
    
    /**
     * Kod warunków dostawy lub transportu (INCOTERMS): 
     * „EXW” – ex works 
     * „FOR” – przekazanie przewoźnikowi w określonym miejscu 
     * „CPT” – opłacone do miejsca dostawy
     */
    #[JMS\SerializedName('DeliveryTermsCode')]
    private ?string $code;

    #[JMS\SerializedName('DeliveryTermsDescription')]
    private ?string $description;

    public function __construct(?string $code = null, ?string $description = null)
    {
        $this->code = $code;
        $this->description = $description;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
