<?php

namespace Hotcoffee;

use Hotcoffee\Addon\AddonInterface;
use Hotcoffee\Ingredients\IngredientInterface;
use Hotcoffee\Country\CountryInterface;

/**
 * Class Quote
 * @package Hotcoffee
 */
class Quote implements QuoteInterface
{
    /** @var CountryInterface */
    private $country;

    /**
     * Quote constructor.
     * @param CountryInterface $country
     */
    public function __construct(CountryInterface $country)
    {
        $this->country = $country;
    }

    /**
     * Country name
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->country->getCountryName();
    }

    /**
     * Taxes
     * @return float
     */
    public function getTax(): float
    {
        return $this->country->getTax();
    }

    /**
     * Return add-ons
     * @return AddonInterface[]
     */
    public function getAddOns(): array
    {
        return $this->country->getAddOns();
    }

    /**
     * Return Ingredients
     * @return IngredientInterface[]
     */
    public function getIngredients(): array
    {
        return $this->country->getIngredients();
    }
}
