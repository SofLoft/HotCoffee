<?php


namespace Hotcoffee\App;

/**
 * Class TemplateEngine
 * @package Hotcoffee\App
 */
class TemplateEngine
{
    /** @var string */
    private $template;

    /**
     * Template constructor.
     * @param string $template
     */
    public function __construct(string $template)
    {
        $this->template = $template;
    }

    /**
     * Render
     * @return void
     */
    public function render() : void
    {
        include "templates/{$this->template}.phtml";
    }
}
