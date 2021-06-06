<?php


namespace Hotcoffee\Addon;

use Hotcoffee\Addon\AddonInterface;

/**
 * Class FabricAddon
 * @package Hotcoffee\Addon
 */
class FabricAddon
{
    /**
     * Return Addon
     * @param string $className
     * @param string $name
     * @param float $price
     * @return AddonInterface
     */
    public function create(
        string $className,
        string $name,
        float $price
    ) : IngredientInterface {
       return new $className($name, $price);
    }
}
