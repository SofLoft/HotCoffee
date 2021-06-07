<?php

namespace Hotcoffee\App;

/**
 * Class Request
 * @package Hotcoffee\App
 */
class Request
{
    /**
     * Get post value
     * @param string $param
     * @return mixed|null
     */
    public function getPost(string $param)
    {
        return $_POST[$param] ?? null;
    }
}
