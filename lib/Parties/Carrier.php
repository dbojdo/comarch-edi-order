<?php
namespace Webit\Comarch\EDI\Order\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Daniel Bojdo <daniel@bojdo.eu>
 * @JMS\XmlRoot("Carrier")
 */
class Carrier
{
    /**
     * Typ transportu
     * 
     * @var int
     */
    const TRANSPORT_MODE_SEA     = 10;
    const TRANSPORT_MODE_TRAIN   = 20;
    const TRANSPORT_MODE_ROAD    = 30;
    const TRANSPORT_MODE_AIR     = 40;
    const TRANSPORT_MODE_MULTI   = 60;
    
    /**
     * @var string
     * @JMS\SerializedName("ILN")
     * @JMS\Type("string")
     */
    private $iln;

    /**
     * Transport type
     * 10 = morski
     * 20 = kolejowy
     * 30 = drogowy
     * 40 = powietrzny
     * 60 = multimodalny
     *
     * @var int
     * @JMS\SerializedName("ModeOfTransport")
     * @JMS\Type("integer")
     */
    private $modeOfTransport;

    /**
     * Carrier constructor.
     * @param int $iln
     * @param int $modeOfTransport
     */
    public function __construct($iln = null, $modeOfTransport = null)
    {
        $this->iln = $iln;
        $this->modeOfTransport = $modeOfTransport;
    }

    /**
     * @return int
     */
    public function getIln()
    {
        return $this->iln;
    }

    /**
     * @param int $iln
     */
    public function setIln($iln)
    {
        $this->iln = $iln;
    }

    /**
     * @return int
     */
    public function getModeOfTransport()
    {
        return $this->modeOfTransport;
    }

    /**
     * @param int $modeOfTransport
     */
    public function setModeOfTransport($modeOfTransport)
    {
        $this->modeOfTransport = $modeOfTransport;
    }
}
