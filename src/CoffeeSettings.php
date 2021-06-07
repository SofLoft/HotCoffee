<?php

namespace Hotcoffee;

/**
 * Class CoffeeSettings
 * @package Hotcofee
 */
class CoffeeSettings
{
    /** @var bool */
    private $needSyrup = false;

    /** @var bool */
    private $needAddOn = false;

    /**
     * Need a Syrup
     * @param bool $yesNo
     * @return $this
     */
    public function setNeedSyrup(bool $yesNo) : self
    {
        $this->needSyrup = $yesNo;

        return $this;
    }

    /**
     * Has Add-ons
     * @return bool
     */
    public function hasAddOn() : bool
    {
        return $this->needAddOn;
    }

    /**
     * Has syrup
     * @return bool
     */
    public function hasSyrup() : bool
    {
        return $this->needSyrup;
    }

    /**
     * Need an add-on
     * @param bool $yesNo
     * @return $this
     */
    public function setNeedAddOn(bool $yesNo) : self
    {
        $this->needAddOn = $yesNo;

        return $this;
    }
}
