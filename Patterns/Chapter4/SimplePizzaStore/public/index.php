<?php

use Patterns\Chapter4\SimplePizzaStore\ {PizzaStore, SimplePizzaFactory};

require __DIR__ . '/../../../../vendor/autoload.php';


$simpleFactory = new SimplePizzaFactory();
$pizzaStore = new PizzaStore($simpleFactory);

$pizza = $pizzaStore->orderPizza("cheese");
echo "" . $pizza->getName() . "<br/>";
