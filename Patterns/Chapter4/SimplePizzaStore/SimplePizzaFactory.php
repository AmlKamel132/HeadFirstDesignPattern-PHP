<?php


namespace Patterns\Chapter4\SimplePizzaStore;

class SimplePizzaFactory
{

    public function createPizza(string $type): Pizza
    {
        $pizza = Null;
        if ($type == "cheese") {
            $pizza = new CheesePizza();
        } else if ($type == "pepperoni") {
            $pizza = new PepperoniPizza();
        } else if ($type == "clam") {
            $pizza = new ClamPizza();
        } else if ($type == "veggie") {
            $pizza = new VeggiePizza();
        }
        return $pizza;
    }


}