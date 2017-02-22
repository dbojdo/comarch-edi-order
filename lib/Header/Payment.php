<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Payment")
 */
class Payment
{
    /**
     * @var PaymentTerms
     * @JMS\Type("Webit\Comarch\EDI\Order\Header\PaymentTerms")
     * @JMS\SerializedName("PaymentTerms")
     */
    private $paymentTerms;

    /**
     * Payment constructor.
     * @param PaymentTerms $paymentTerms
     */
    public function __construct(PaymentTerms $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms            
     */
    public function setPaymentTerms(PaymentTerms $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }
}
