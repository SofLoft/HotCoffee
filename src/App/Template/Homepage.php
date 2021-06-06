<?php


namespace Hotcoffee\App\Template;

use Hotcoffee\OrderProcessing;
use Hotcoffee\App\TemplateEngine;

/**
 * Class Homepage
 * @package Hotcoffee\App\Template
 */
class Homepage extends TemplateEngine
{
    /** @var OrderProcessing */
    private $orderProcessing;

    /**
     * Homepage constructor.
     */
    public function __construct()
    {
        parent::__construct('homepage');

        $this->orderProcessing = new OrderProcessing();
    }

    /**
     * Return countries
     * @return string[]
     */
    public function getCountryList() : array
    {
        return [
            '0' => 'Spain',
            '1' => 'Italy'
        ];
    }

    /**
     * Returns order information
     * @return string
     */
    public function getOrderInformation() : string
    {
        return '';
    }
}
