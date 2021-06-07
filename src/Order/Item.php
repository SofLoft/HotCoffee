<?php

namespace Hotcoffee\Order;

/**
 * Class Item
 * @package Hotcoffee\Order
 */
class Item implements ItemInterface
{
    /** @var string */
    private $name;

    /** @var int */
    private $qty;

    /** @var float */
    private $price;

    /** @var float */
    private $tax;

    /**
     * Item constructor.
     * @param string $name
     * @param int $qty
     * @param float $price
     * @param float $tax
     */
    public function __construct(string $name, int $qty, float $price, float $tax)
    {
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * Name of item
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Qty
     * @return int
     */
    public function getOrderedQty(): int
    {
        return $this->qty;
    }

    /**
     * Price
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Row total
     * @return float
     */
    public function getRowTotal(): float
    {
        return $this->price * $this->qty;
    }

    /**
     * Taxes
     * @return float
     */
    public function getTaxAmount(): float
    {
        return ($this->getRowTotal() / 100) * $this->tax;
    }

    /**
     * Tax percent
     * @return float
     */
    public function getTaxPercent(): float
    {
        return $this->tax;
    }
}
