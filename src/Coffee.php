<?php


namespace Hotcoffee;

use Hotcoffee\Country\CountryInterface;

/**
 * Class Coffee
 * @package Hotcofee
 */
class Coffee
{
    /** @var CountryInterface */
    private $country;

    /** @var CoffeeSettings  */
    private $coffeeSettings;

    /**
     * Coffee constructor.
     * @param CountryInterface $country
     * @param \Hotcoffee\CoffeeSettings $coffeeSettings
     */
    public function __construct(
        CountryInterface $country,
        CoffeeSettings $coffeeSettings
    ) {
        $this->country = $country;
        $this->coffeeSettings = $coffeeSettings;
    }

    public function make()
    {
        echo $this->country->getSyrup();
    }
}
