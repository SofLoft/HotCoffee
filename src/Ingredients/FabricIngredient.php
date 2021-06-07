<?php

namespace Hotcoffee\Ingredients;

/**
 * Class FabricIngredient
 * @package Hotcoffee\Ingredients
 */
class FabricIngredient
{
    /**
     * Return Ingredient
     * @param string $className
     * @param string $name
     * @param float $price
     * @param int $qty
     * @return IngredientInterface
     */
    public function create(
        string $className,
        string $name,
        float $price,
        int $qty
    ) : IngredientInterface {
       return new $className($name, $price, $qty);
    }
}
