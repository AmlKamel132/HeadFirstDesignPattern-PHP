<?php

use Patterns\Chapter4\FactoryMethodPizzaStore\{ChicagoPizzaStore, NYPizzaStore};

require __DIR__ . '/../../../../vendor/autoload.php';


$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("cheese");
echo "Ethan ordered a " . $pizza->getName() . "<br/>";

echo "-----------------------------------------------------------------<br/>";

$pizza = $chicagoStore->orderPizza("cheese");
echo "Joel ordered a " . $pizza->getName() . "<br/>";


