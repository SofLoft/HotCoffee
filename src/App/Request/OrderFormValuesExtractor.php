<?php

namespace Hotcoffee\App\Request;


use Hotcoffee\App\Request;

/**
 * Class OrderFormValuesExtractor
 * @package Hotcoffee\App\Request
 */
class OrderFormValuesExtractor
{
    private $request;

    /**
     * OrderFormValuesExtractor constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }

    /**
     * Returns city id
     * @return int
     */
    public function getCountryId() : int
    {
        return (int)$this->request->getPost('country');
    }

    /**
     * Has syrup
     * @return bool
     */
    public function hasSyrup() : bool
    {
        return (bool)$this->request->getPost('syrup');
    }

    /**
     * Has add-on
     * @return bool
     */
    public function hasAddOn() : bool
    {
        return (bool)$this->request->getPost('addition');
    }
}
