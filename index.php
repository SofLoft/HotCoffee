<?php

/**
 * Bootstrap
 */

require_once __DIR__ . '/vendor/autoload.php';

/*use Hotcoffee\Coffee;
use Hotcoffee\CoffeeSettings;
use Hotcoffee\Country\Italy;

$italy = new Italy();
$coffeeSettings = new CoffeeSettings();

$coffee = new Coffee($italy, $coffeeSettings);

$coffee->make();*/

use Hotcoffee\App\Template\Homepage;
use Hotcoffee\App\Bootstrap;

$homepageTemplate = new Homepage();
$bootstrap = new Bootstrap();

$bootstrap->setTemplate($homepageTemplate)
    ->run();
