<?php

namespace Hotcoffee;

/**
 * Interface OrderInterface
 * @package Hotcoffee
 */
interface OrderInterface
{
    /**
     * Country name
     * @return string
     */
    public function getCountryName() : string;

    /**
     * @return array
     */
    public function getItems() : array;

    /**
     * Order subtotal
     * @return float
     */
    public function getSubtotal() : float;

    /**
     * Taxes
     * @return float
     */
    public function getTax() : float;

    /**
     * Order grand total
     * @return float
     */
    public function getGrandTotal() : float;

    /**
     * Place order
     * @return OrderInterface
     */
    public function place() : OrderInterface;
}
