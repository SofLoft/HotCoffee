<?php

namespace Hotcoffee;

use Hotcoffee\Order\Item;

/**
 * Class OrderProcessing
 * @package Hotcoffee
 */
class Order implements OrderInterface
{
    /** @var Quote */
    private $quote;

    /** @var float */
    private $tax = 0.00;

    /** @var float */
    private $subtotal = 0.00;

    /** @var float */
    private $grandTotal = 0.00;

    /** @var Item[] */
    private $items = [];

    /**
     * Order constructor.
     * @param Quote $quote
     */
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    /**
     * Country name
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->quote->getCountryName();
    }

    /**
     * Items
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Order subtotal
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    /**
     * Taxes
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * Order grand total
     * @return float
     */
    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }

    /**
     * Place order
     * @return OrderInterface
     */
    public function place(): OrderInterface
    {
        $this->items = [];

        $this->collectAddOns()
            ->collectIngredients()
            ->calcTotals();

        return $this;
    }

    /**
     * Calc totals
     * @return $this
     */
    private function calcTotals() : self
    {
        $this->tax = 0.0;
        $this->subtotal = 0.0;
        $this->grandTotal = 0.0;

        foreach ($this->items as $item) {
            $this->tax += $item->getTaxAmount();
            $this->subtotal += $item->getRowTotal();
            $this->grandTotal += ($item->getRowTotal() + $item->getTaxAmount());
        }

        return $this;
    }

    /**
     * Collect Ingredients
     * @return $this
     */
    private function collectIngredients() : self
    {
        foreach ($this->quote->getIngredients() as $ingredient) {
            $this->items[] = $this->createItem(
                $ingredient->getName(),
                $ingredient->getQty(),
                $ingredient->getPrice(),
                $this->quote->getTax()
            );
        }

        return $this;
    }

    /**
     * Collect addons
     * @return $this
     */
    private function collectAddOns() : self
    {
        foreach ($this->quote->getAddOns() as $addOn) {
            $this->items[] = $this->createItem(
                $addOn->getName(),
                $addOn->getQty(),
                $addOn->getPrice(),
                $this->quote->getTax()
            );
        }

        return $this;
    }

    /**
     * @param string $name
     * @param int $qty
     * @param float $price
     * @param float $tax
     * @return Item
     */
    private function createItem(string $name, int $qty, float $price, float $tax) : Item
    {
        return new Item($name, $qty, $price, $tax);
    }
}
