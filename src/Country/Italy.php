<?php


namespace Hotcoffee\Country;

use Hotcoffee\Ingredients\CoconutSyrupIngredient;
use Hotcoffee\Addon\CroissantAddon;

/**
 * Class Italy
 * @package Hotcoffee\Country
 */
class Italy extends Base
{
    /**
     * Returns a portion
     * @return int
     */
    public function getPortion(): int
    {
        return 1;
    }

    /**
     * Make coffee
     * @return CountryInterface
     */
    public function makeCoffee(): CountryInterface
    {
        // TODO: Implement makeCoffee() method.
    }

    /**
     * Return Syrup by default
     * @return string
     */
    public function getSyrup(): string
    {
        return $this->getFabricIngredient()->create(
            CoconutSyrupIngredient::class,
            'Coco',
            0.50
        )->getName();
    }

    /**
     * Return add-on by default
     * @return string
     */
    public function getAddOn(): string
    {
        return $this->getFabricAddon()->create(
            CroissantAddon::class,
            'Croissant',
            1.00
        )->getName();
    }

    /**
     * Return add-ons
     * @return \Hotcoffee\Addon\AddonInterface[]
     */
    public function getAddOns(): array
    {
        // TODO: Implement getAddOns() method.
    }

    /**
     * Return Ingredients
     * @return \Hotcofee\IngredientInterface[]
     */
    public function getIngredients(): array
    {
        // TODO: Implement getIngredients() method.
    }
}
