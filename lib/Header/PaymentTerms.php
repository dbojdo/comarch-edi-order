<?php
namespace Webit\Comarch\EDI\Order\Header;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('PaymentTerms')]
final class PaymentTerms
{
    #[JMS\SerializedName('PaymentDescription')]
    private ?string $description = null;

    #[JMS\SerializedName('Percentage')]
    private ?float $percentage = null;

    #[JMS\SerializedName('PaymentDate')]
    private ?string $paymentDate = null;

    public function __construct(?string $description = null, ?float $percentage = null, ?\DateTimeImmutable $paymentDate = null)
    {
        $this->description = $description;
        $this->percentage = $percentage;
        $this->paymentDate = $paymentDate->format('Y-m-d');
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     */
    public function setPercentage(?float $percentage): void
    {
        $this->percentage = $percentage;
    }

    public function getPaymentDate(): ?\DateTimeImmutable
    {
        return $this->paymentDate ? date_create_immutable($this->paymentDate) : null;
    }

    public function setPaymentDate(\DateTimeImmutable $paymentDate): void
    {
        $this->paymentDate = $paymentDate->format('Y-m-d');
    }
}
