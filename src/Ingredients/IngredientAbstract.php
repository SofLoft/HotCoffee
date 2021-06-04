<?php


namespace Hotcoffee\Ingredients;

/**
 * Class IngredientAbstract
 * @package Hotcoffee\Ingredients
 */
abstract class IngredientAbstract implements IngredientInterface
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $price;

    /**
     * IngredientAbstract constructor.
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Name of Ingredient
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Price of Ingredient
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
