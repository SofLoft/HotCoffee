<?php


namespace Hotcoffee\Country;

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
