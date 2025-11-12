<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Payment')]
final class Payment
{
    #[JMS\SerializedName('PaymentTerms')]
    private ?PaymentTerms $paymentTerms = null;

    public function __construct(?PaymentTerms $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
    }

    public function getPaymentTerms(): ?PaymentTerms
    {
        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms            
     */
    public function setPaymentTerms(?PaymentTerms $paymentTerms): void
    {
        $this->paymentTerms = $paymentTerms;
    }
}
