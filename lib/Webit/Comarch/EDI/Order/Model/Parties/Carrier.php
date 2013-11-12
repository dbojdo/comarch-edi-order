<?php
namespace Webit\Comarch\EDI\Order\Model\Parties;

use JMS\Serializer\Annotation as JMS;

/**
 *
 * @author dbojdo
 *        
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
     * GLN Przewoźnika 
     *
     * @var int
     * @JMS\SerializedName("INL")
     * @JMS\Type("integer")
     */
    protected $inl;

    /**
     * Typ transportu
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
    protected $modeOfTransport;

    /**
     *
     * @return int
     */
    public function getInl()
    {
        return $this->inl;
    }

    /**
     *
     * @param int $inl
     */
    public function setInl($inl)
    {
        $this->inl = $inl;
    }

    /**
     *
     * @return int
     */
    public function getModeOfTransport()
    {
        return $this->modeOfTransport;
    }

    /**
     *
     * @param int $modeOfTransport
     */
    public function setModeOfTransport($modeOfTransport)
    {
        $this->modeOfTransport = $modeOfTransport;
    }
}
