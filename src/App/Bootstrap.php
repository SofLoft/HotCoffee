<?php


namespace Hotcoffee\App;

/**
 * Class Bootstrap
 * @package Hotcoffee\App
 */
class Bootstrap
{
    /** @var TemplateEngine */
    private $template;

    /**
     * Set template
     * @param TemplateEngine $template
     * @return $this
     */
    public function setTemplate(TemplateEngine $template): self
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Run application
     * @return $this
     */
    public function run() : self
    {
        $this->template->render();

        return $this;
    }
}
