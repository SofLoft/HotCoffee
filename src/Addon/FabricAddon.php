<?php

namespace Hotcoffee\Addon;

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
     * @param int $qty
     * @return AddonInterface
     */
    public function create(
        string $className,
        string $name,
        float $price,
        int $qty
    ) : AddonInterface {
       return new $className($name, $price, $qty);
    }
}
