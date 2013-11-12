<?php
namespace Webit\Comarch\EDI\Order\Model\Header;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 *        
 * @JMS\XmlRoot("Payment")
 */
class Payment
{

    /**
     *
     * @var PaymentTerms 
     * 
     * @JMS\Type("PaymentTerms")
     * @JMS\SerializedName("PaymentTerms")
     */
    protected $paymentTerms;

    /**
     *
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     *
     * @param PaymentTerms $paymentTerms            
     */
    public function setPaymentTerms(PaymentTerms $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }
}
