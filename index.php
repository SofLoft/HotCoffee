<?php

/**
 * Bootstrap
 */

require_once __DIR__ . '/vendor/autoload.php';

use Hotcoffee\App\Template\Homepage;
use Hotcoffee\App\Bootstrap;

$homepageTemplate = new Homepage();
$bootstrap = new Bootstrap();

$bootstrap->setTemplate($homepageTemplate)
    ->run();
