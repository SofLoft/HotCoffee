<?php


namespace Hotcoffee\App;

/**
 * Class TemplateEngine
 * @package Hotcoffee\App
 */
class TemplateEngine
{
    /** @var string */
    private $name;

    /**
     * Template constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Render
     * @return void
     */
    public function render()
    {
        include "templates/{$this->name}.phtml";
    }
}
