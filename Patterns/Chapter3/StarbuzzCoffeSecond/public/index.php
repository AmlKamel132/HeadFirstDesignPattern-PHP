<?php

use Patterns\Chapter3\StarbuzzCoffeSecond\{DarkRoast, Espresso, HouseBlend, Mocha, Soy, Whip};

require __DIR__ . '/../../../../vendor/autoload.php';

$beverage = new Espresso();
echo $beverage->getDescription() . " $" . $beverage->cost() . "<br/>";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . " $" . $beverage2->cost() . "<br/>";

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . " $" . $beverage3->cost() . "<br/>";

