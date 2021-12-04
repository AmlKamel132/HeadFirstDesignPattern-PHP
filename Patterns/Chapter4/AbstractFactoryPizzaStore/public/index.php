<?php

use Patterns\Chapter4\AbstractFactoryPizzaStore\ChicagoPizzaStore;
use Patterns\Chapter4\AbstractFactoryPizzaStore\NYPizzaStore;

require __DIR__ . '/../../../../vendor/autoload.php';


$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("cheese");
echo "Ethan ordered a " . $pizza->getName() . "<br/>";

echo "-----------------------------------------------------------------<br/>";

$pizza = $chicagoStore->orderPizza("cheese");
echo "Joel ordered a " . $pizza->getName() . "<br/>";
