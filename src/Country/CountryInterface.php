<?php


namespace Hotcoffee\Country;

/**
 * Interface CountryInterface
 * @package Hotcoffee\Country
 */
interface CountryInterface
{
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
     * Return add-on by default
     * @return string
     */
    public function getAddOn() : string;

    /**
     * Return Ingredients
     * @return \Hotcofee\IngredientInterface[]
     */
    public function getIngredients() : array;
}
