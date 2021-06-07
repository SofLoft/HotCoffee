<?php

namespace Hotcoffee;

use Exception;
use Hotcoffee\Country\CountryInterface;
use Hotcoffee\Country\Italy;
use Hotcoffee\Country\Spain;

/**
 * Class CountryResolver
 * @package Hotcoffee
 */
class CountryResolver
{
    /** @var int */
    private $countryId;

    /** @var string[] */
    private $countryPool = [
        1 => Spain::class,
        2 => Italy::class
    ];

    /**
     * CountryResolver constructor.
     * @param int $countryId
     */
    public function __construct(int $countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * Resolve the country by Id
     * @return CountryInterface
     * @throws Exception
     */
    public function resolve() : CountryInterface
    {
        foreach ($this->countryPool as $countryClassId => $countryClass) {
            if ($countryClassId === $this->countryId) {
                return new $countryClass();
            }
        }

        throw new Exception('The country has not detected.');
    }
}
