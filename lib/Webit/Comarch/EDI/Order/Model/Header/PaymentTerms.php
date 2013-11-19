<?php
namespace Webit\Comarch\EDI\Order\Model\Header;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 *        
 * @JMS\XmlRoot("PaymentTerms")
 */
class PaymentTerms
{

    /**
     * Opis płatności 
     *
     * @var string 
     * 
     * @JMS\Type("string")
     * @JMS\SerializerName("PaymentDescription")
     */
    protected $description;

    /**
     * Oprocentowanie płatności 
     *
     * @var float 
     * 
     * @JMS\Type("double")
     * @JMS\SerializedName("Percentage")
     */
    protected $percentage;

    /**
     * Data płatności 
     *
     * @var \DateTime 
     * 
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("PaymentDate")
     */
    protected $paymentDate;

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param string $description            
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     *
     * @param float $percentage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     *
     * @param \DateTime $paymentDate            
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }
}
