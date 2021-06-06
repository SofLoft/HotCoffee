<?php


namespace Hotcoffee\Country;

/**
 * Interface CountryInterface
 * @package Hotcoffee\Country
 */
interface CountryInterface
{
    /**
     * Make coffee
     * @return CountryInterface
     */
    public function makeCoffee() : CountryInterface;

    /**
     * Returns a portion
     * @return int
     */
    public function getPortion() : int;

    /**
     * Return Syrup by default
     * @return string
     */
    public function getSyrup() : string;

    /**
     * Return add-ons
     * @return \Hotcoffee\Addon\AddonInterface[]
     */
    public function getAddOns() : array;

    /**
     * Return Ingredients
     * @return \Hotcoffee\IngredientInterface[]
     */
    public function getIngredients() : array;
}
