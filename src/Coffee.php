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
     * @param CoffeeSettings $coffeeSettings
     */
    public function __construct(
        CountryInterface $country,
        CoffeeSettings $coffeeSettings
    ) {
        $this->country = $country;
        $this->coffeeSettings = $coffeeSettings;
    }

    /**
     * Make the order
     * @return Order
     */
    public function make() : Order
    {
        if ($this->coffeeSettings->hasSyrup() === true) {
            $this->country->addSyrup();
        }

        if ($this->coffeeSettings->hasAddOn() === true) {
            $this->country->addAddons();
        }

        $this->country->prepareComponents();

        $order = new Order($this->getQuote());
        $order->place();

        return $order;
    }

    /**
     * Returns Quote of the country
     * @return Quote
     */
    private function getQuote() : Quote
    {
       return new Quote($this->country);
    }
}
