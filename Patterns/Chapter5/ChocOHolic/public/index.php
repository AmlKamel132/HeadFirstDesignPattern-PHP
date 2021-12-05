<?php

use Patterns\Chapter5\ChocOHolic\ChocolateBoiler;

require __DIR__ . '/../../../../vendor/autoload.php';

$boiler = ChocolateBoiler::getInstance();

$boiler->fill();
$boiler->boil();
$boiler->drain();

var_dump($boiler->isEmpty());