<?php


namespace Hotcoffee\Addon;

/**
 * Class AddonAbstract
 * @package Hotcoffee\Addon
 */
abstract class AddonAbstract implements AddonInterface
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $price;

    /** @var int */
    protected $qty;

    /**
     * AddonAbstract constructor.
     * @param string $name
     * @param float $price
     * @param int $qty
     */
    public function __construct(string $name, float $price, int $qty)
    {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
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

    /**
     * Qty
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }
}
