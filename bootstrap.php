<?php

/**
 * Bootstrap
 */

require_once __DIR__ . '/vendor/autoload.php';

use Hotcoffee\Coffee;
use Hotcoffee\CoffeeSettings;
use Hotcoffee\Country\Italy;

$italy = new Italy();
$coffeeSettings = new CoffeeSettings();

$coffee = new Coffee($italy, $coffeeSettings);

$coffee->make();
