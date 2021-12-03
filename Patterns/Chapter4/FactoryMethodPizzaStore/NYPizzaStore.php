<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class NYPizzaStore extends PizzaStore
{

    protected function createPizza(string $type)
    {

        if ($type == "cheese") {
            return new NYStyleCheesePizza();
        } else if ($type == "veggie") {
            return new NYStyleVeggiePizza();
        } else if ($type == "clam") {
            return new NYStyleClamPizza();
        } else if ($type == "pepperoni") {
            return new NYStylePepperoniPizza();
        } else return Null;
    }
}