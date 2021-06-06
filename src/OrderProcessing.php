<?php


namespace Hotcoffee;

use Hotcoffee\App\Request;

/**
 * Class OrderProcessing
 * @package Hotcoffee
 */
class OrderProcessing
{
    private $request;

    /**
     * Request
     * @return Request
     */
    private function getRequest() : Request
    {
        if ($this->request === null) {
            $this->request = new Request();
        }

        return $this->request;
    }
}
