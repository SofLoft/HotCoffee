<?php

namespace Hotcoffee\Order;

/**
 * Interface ItemInterface
 * @package Hotcoffee\Order
 */
interface ItemInterface
{
    /**
     * Name of item
     * @return string
     */
    public function getName() : string;

    /**
     * Price
     * @return float
     */
    public function getPrice() : float;

    /**
     * Qty
     * @return int
     */
    public function getOrderedQty() : int;

    /**
     * Row total
     * @return float
     */
    public function getRowTotal() : float;

    /**
     * Taxes
     * @return float
     */
    public function getTaxAmount() : float;

    /**
     * Tax percent
     * @return float
     */
    public function getTaxPercent() : float;
}
