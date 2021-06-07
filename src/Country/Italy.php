<?php

namespace Hotcoffee\Country;

use Hotcoffee\Addon\CroissantAddon;
use Hotcoffee\Ingredients\CoconutSyrupIngredient;
use Hotcoffee\Ingredients\CoffeeIngredient;
use Hotcoffee\Ingredients\MilkIngredient;
use Hotcoffee\Ingredients\WaterIngredient;

/**
 * Class Italy
 * @package Hotcoffee\Country
 */
class Italy extends Base
{
    /**
     * Returns country name
     * @return string
     */
    public function getCountryName(): string
    {
        return 'Italy';
    }

    /**
     * Taxes
     * @return float
     */
    public function getTax(): float
    {
        return 7.00;
    }

    /**
     * Add syrup to coffee
     * @return CountryInterface
     */
    public function addSyrup(): CountryInterface
    {
        $this->addIngredient('Coconut Syrup', CoconutSyrupIngredient::class, 0.50, 1);

        return $this;
    }

    /**
     * Add add-ons
     * @return CountryInterface
     */
    public function addAddons(): CountryInterface
    {
        $this->addAddOn('Croissant', CroissantAddon::class, 1.00, 1);

        return $this;
    }

    /**
     * Prepare components
     * @return CountryInterface
     */
    public function prepareComponents(): CountryInterface
    {
        $this->addIngredient('Coffee', CoffeeIngredient::class, 1.50, 1)
            ->addIngredient('Milk', MilkIngredient::class, 0.40, 1)
            ->addIngredient('Water', WaterIngredient::class, 0.10, 1)
        ;

        return $this;
    }
}
