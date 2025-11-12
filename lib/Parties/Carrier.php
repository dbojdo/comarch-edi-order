<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 */
#[JMS\XmlRoot('Carrier')]
final class Carrier
{
    /**
     * Typ transportu
     * 
     * @var int
     */
    public const int TRANSPORT_MODE_SEA = 10;
    public const int TRANSPORT_MODE_TRAIN = 20;
    public const int TRANSPORT_MODE_ROAD = 30;
    public const int TRANSPORT_MODE_AIR = 40;
    public const int TRANSPORT_MODE_MULTI = 60;

    #[JMS\SerializedName('ILN')]
    private ?string $iln = null;

    /**
     * Transport type
     * 10 = morski
     * 20 = kolejowy
     * 30 = drogowy
     * 40 = powietrzny
     * 60 = multimodalny
     */
    #[JMS\SerializedName('ModeOfTransport')]
    private ?int $modeOfTransport = null;

    public function __construct(?string $iln = null, ?int $modeOfTransport = null)
    {
        $this->iln = $iln;
        $this->modeOfTransport = $modeOfTransport;
    }

    public function getIln(): ?string
    {
        return $this->iln;
    }

    public function setIln(?string $iln): void
    {
        $this->iln = $iln;
    }

    public function getModeOfTransport(): ?int
    {
        return $this->modeOfTransport;
    }

    public function setModeOfTransport(?int $modeOfTransport): void
    {
        $this->modeOfTransport = $modeOfTransport;
    }
}
