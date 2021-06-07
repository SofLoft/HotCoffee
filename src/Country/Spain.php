<?php

namespace Hotcoffee\Country;

use Hotcoffee\Addon\ChocolateAddon;
use Hotcoffee\Ingredients\MelonSyrupIngredient;
use Hotcoffee\Ingredients\CoffeeIngredient;
use Hotcoffee\Ingredients\MilkIngredient;
use Hotcoffee\Ingredients\WaterIngredient;

/**
 * Class Spain
 * @package Hotcoffee\Country
 */
class Spain extends Base
{
    /**
     * Returns country name
     * @return string
     */
    public function getCountryName(): string
    {
        return 'Spain';
    }

    /**
     * Taxes
     * @return float
     */
    public function getTax(): float
    {
        return 3.00;
    }

    /**
     * Add syrup to coffee
     * @return CountryInterface
     */
    public function addSyrup(): CountryInterface
    {
        $this->addIngredient('Melon Syrup', MelonSyrupIngredient::class, 0.50, 1);

        return $this;
    }

    /**
     * Add add-ons
     * @return CountryInterface
     */
    public function addAddons(): CountryInterface
    {
        $this->addAddOn('Chocolate', ChocolateAddon::class, 1.00, 1);

        return $this;
    }

    /**
     * Prepare components
     * @return CountryInterface
     */
    public function prepareComponents(): CountryInterface
    {
        $this->addIngredient('Coffee', CoffeeIngredient::class, 1.00, 2)
            ->addIngredient('Milk', MilkIngredient::class, 0.30, 1)
            ->addIngredient('Water', WaterIngredient::class, 0.10, 1);

        return $this;
    }
}
