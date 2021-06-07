<?php

namespace Hotcoffee;

use Hotcoffee\Addon\AddonInterface;
use Hotcoffee\Ingredients\IngredientInterface;

/**
 * Interface QuoteInterface
 * @package Hotcoffee
 */
interface QuoteInterface
{
    /**
     * Country name
     * @return string
     */
    public function getCountryName() : string;

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
}
