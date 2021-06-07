<?php

namespace Hotcoffee\App\Template;

use Hotcoffee\Country\CountryInterface;
use Hotcoffee\Order;
use Hotcoffee\Coffee;
use Hotcoffee\CoffeeSettings;
use Hotcoffee\CountryResolver;
use Hotcoffee\App\TemplateEngine;
use Hotcoffee\App\Request\OrderFormValuesExtractor;

/**
 * Class Homepage
 * @package Hotcoffee\App\Template
 */
class Homepage extends TemplateEngine
{
    /** @var OrderFormValuesExtractor */
    private $orderFormValuesExtractor;

    /** @var CountryResolver */
    private $countryResolver;

    /** @var array */
    private $errors = [];

    /**
     * Homepage constructor.
     */
    public function __construct()
    {
        parent::__construct('homepage');

        $this->orderFormValuesExtractor = new OrderFormValuesExtractor();
        $this->countryResolver = new CountryResolver($this->orderFormValuesExtractor->getCountryId());
    }

    /**
     * Return countries
     * @return string[]
     */
    public function getCountryList() : array
    {
        return [
            1 => 'Spain',
            2 => 'Italy'
        ];
    }

    /**
     * Returns order information
     * @return Order
     */
    public function getOrderInformation(): ?Order
    {
        $country = $this->resolveCountry();
        if ($country instanceof CountryInterface) {
            $coffeeSettings = new CoffeeSettings();
            $coffeeSettings->setNeedAddOn($this->orderFormValuesExtractor->hasAddOn())
                ->setNeedSyrup($this->orderFormValuesExtractor->hasSyrup());

            $coffee = new Coffee($country, $coffeeSettings);

            return $coffee->make();
        }

        return null;
    }

    /**
     * Resolve country
     * @return CountryInterface|null
     */
    private function resolveCountry(): ?CountryInterface
    {
        if ($this->orderFormValuesExtractor->getCountryId() !== 0) {
            try {
                return $this->countryResolver->resolve();
            } catch (\Exception $exception) {
                $this->addError($exception->getMessage());
            }
        }

        return null;
    }

    /**
     * Add error to stack
     * @param string $errorMessage
     * @return $this
     */
    private function addError(string $errorMessage) : self
    {
        $this->errors[] = $errorMessage;

        return $this;
    }

    /**
     * Errors
     * @return array
     */
    public function getErrors() : array
    {
        return $this->errors;
    }

    /**
     * Has errors
     * @return bool
     */
    public function hasErrors() : bool
    {
        return count($this->errors) > 0;
    }
}
