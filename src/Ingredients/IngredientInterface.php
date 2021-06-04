<?php


namespace Hotcoffee\Ingredients;

/**
 * Interface IngredientInterface
 * @package Hotcoffee\Ingredients
 */
interface IngredientInterface
{
    /**
     * Name of Ingredient
     * @return string
     */
    public function getName() : string;

    /**
     * Price of Ingredient
     * @return float
     */
    public function getPrice() : float;
}
