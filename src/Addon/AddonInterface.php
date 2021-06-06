<?php


namespace Hotcoffee\Addon;

/**
 * Interface AddonInterface
 * @package Hotcoffee\Addon
 */
interface AddonInterface
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
