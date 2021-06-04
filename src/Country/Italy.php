<?php


namespace Hotcoffee\Country;


use Hotcoffee\Ingredients\CoconutSyrupIngredient;
use Hotcoffee\Ingredients\FabricIngredient;

/**
 * Class Italy
 * @package Hotcoffee\Country
 */
class Italy implements CountryInterface
{
    /** @var FabricIngredient */
    private $fabricIngredient;

    /**
     * Returns a portion
     * @return int
     */
    public function getPortion(): int
    {
        return 1;
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
            1.25
        )->getName();
    }

    /**
     * Return add-on by default
     * @return string
     */
    public function getAddOn(): string
    {
        // TODO: Implement getAddOn() method.
    }

    /**
     * Return Ingredients
     * @return \Hotcofee\IngredientInterface[]
     */
    public function getIngredients(): array
    {
        // TODO: Implement getIngredients() method.
    }

    /**
     * @return FabricIngredient
     */
    private function getFabricIngredient() : FabricIngredient
    {
        if ($this->fabricIngredient === null) {
            $this->fabricIngredient = new FabricIngredient();
        }
        return $this->fabricIngredient;
    }
}
