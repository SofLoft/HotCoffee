<?php


namespace Hotcoffee\App;

/**
 * Class Request
 * @package Hotcoffee\App
 */
class Request
{
    /**
     * Returns value from request
     * @param string $param
     * @return mixed|null
     */
    public function getValue(string $param)
    {
        return $_REQUEST[$param] ?? null;
    }
}
