<?php


namespace Hotcoffee\Ingredients;

use Hotcoffee\Ingredients\CoconutSyrupIngredient;
use Hotcoffee\Ingredients\IngredientInterface;

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
     * @return IngredientInterface
     */
    public function create(
        string $className,
        string $name,
        float $price
    ) : IngredientInterface {
       return new $className($name, $price);
    }
}
