<?php

namespace Hotcoffee\Country;

use Hotcoffee\Addon\AddonInterface;
use Hotcoffee\Ingredients\IngredientInterface;
use Hotcoffee\Ingredients\FabricIngredient;
use Hotcoffee\Addon\FabricAddon;

/**
 * Class Base
 * @package Hotcoffee\Country
 */
abstract class Base implements CountryInterface
{
    /** @var FabricIngredient */
    private $fabricIngredient;

    /** @var FabricAddon */
    private $fabricAddon;

    /** @var AddonInterface[]  */
    private $addonsList = [];

    /** @var IngredientInterface[]  */
    private $ingredientsList = [];

    /**
     * Return add-ons
     * @return AddonInterface[]
     */
    public function getAddOns(): array
    {
        return $this->addonsList;
    }

    /**
     * Return Ingredients
     * @return IngredientInterface[]
     */
    public function getIngredients(): array
    {
        return $this->ingredientsList;
    }

    /**
     * Add Addon-on
     * @param string $addonName
     * @param string $className
     * @param float $price
     * @param int $qty
     * @return $this
     */
    protected function addAddOn(
        string $addonName,
        string $className,
        float $price,
        int $qty
    ) : self {
        $fabricAddon = $this->getFabricAddon()
            ->create($className, $addonName, $price, $qty);
        $this->addonsList[spl_object_hash($fabricAddon)] = $fabricAddon;

        return $this;
    }

    /**
     * Add Ingredient
     * @param string $ingredientName
     * @param string $className
     * @param float $price
     * @param int $qty
     * @return $this
     */
    protected function addIngredient(
        string $ingredientName,
        string $className,
        float $price,
        int $qty) : self {
        $fabricIngredient = $this->getFabricIngredient()
            ->create($className, $ingredientName, $price, $qty);
        $this->ingredientsList[spl_object_hash($fabricIngredient)] = $fabricIngredient;

        return $this;
    }

    /**
     * Fabric ingredient
     * @return FabricIngredient
     */
    protected function getFabricIngredient() : FabricIngredient
    {
        if ($this->fabricIngredient === null) {
            $this->fabricIngredient = new FabricIngredient();
        }
        return $this->fabricIngredient;
    }

    /**
     * Fabric addon
     * @return FabricAddon
     */
    protected function getFabricAddon() : FabricAddon
    {
        if ($this->fabricAddon === null) {
            $this->fabricAddon = new FabricAddon();
        }
        return $this->fabricAddon;
    }
}
