<?php


namespace Hotcoffee;

/**
 * Class CoffeeSettings
 * @package Hotcofee
 */
class CoffeeSettings
{
    /** @var bool */
    private $isNeedSyrup = false;

    /** @var bool */
    private $isNeedAddOn = false;

    /**
     * Need a Syrup
     * @param bool $yesNo
     * @return $this
     */
    public function setNeedSyrup(bool $yesNo) : self
    {
        $this->isNeedSyrup = $yesNo;

        return $this;
    }

    /**
     * Need an add-on
     * @param bool $yesNo
     * @return $this
     */
    public function setNeedAddOn(bool $yesNo) : self
    {
        $this->isNeedAddOn = $yesNo;

        return $this;
    }
}
