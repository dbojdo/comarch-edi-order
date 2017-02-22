<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("PaymentTerms")
 */
class PaymentTerms
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PaymentDescription")
     */
    private $description;

    /**
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("Percentage")
     */
    private $percentage;

    /**
     * Data płatności
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("PaymentDate")
     */
    private $paymentDate;

    /**
     * PaymentTerms constructor.
     * @param string $description
     * @param float $percentage
     * @param \DateTime $paymentDate
     */
    public function __construct($description = null, $percentage = null, \DateTime $paymentDate = null)
    {
        $this->description = $description;
        $this->percentage = $percentage;
        $this->paymentDate = $paymentDate->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description            
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate ? date_create($this->paymentDate) : null;
    }

    /**
     * @param \DateTime $paymentDate            
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate->format('Y-m-d');
    }
}
