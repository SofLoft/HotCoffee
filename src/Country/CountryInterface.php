<?php

namespace Hotcoffee\Country;

use Hotcoffee\Addon\AddonInterface;
use Hotcoffee\Ingredients\IngredientInterface;

/**
 * Interface CountryInterface
 * @package Hotcoffee\Country
 */
interface CountryInterface
{
    /**
     * Returns country name
     * @return string
     */
    public function getCountryName() : string;

    /**
     * Prepare components
     * @return CountryInterface
     */
    public function prepareComponents() : CountryInterface;

    /**
     * Taxes
     * @return float
     */
    public function getTax() : float;

    /**
     * Return add-ons
     * @return AddonInterface[]
     */
    public function getAddOns() : array;

    /**
     * Return Ingredients
     * @return IngredientInterface[]
     */
    public function getIngredients() : array;

    /**
     * Add syrup to coffee
     * @return CountryInterface
     */
    public function addSyrup() : CountryInterface;

    /**
     * Add add-ons
     * @return CountryInterface
     */
    public function addAddons() : CountryInterface;
}
