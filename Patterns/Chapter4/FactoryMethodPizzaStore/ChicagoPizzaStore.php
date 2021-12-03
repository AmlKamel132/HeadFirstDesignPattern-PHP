<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class ChicagoPizzaStore extends PizzaStore
{

    protected function createPizza(string $type)
    {

        if ($type == "cheese") {
            return new ChicagoStyleCheesePizza();
        } else if ($type == "veggie") {
            return new ChicagoStyleVeggiePizza();
        } else if ($type == "clam") {
            return new ChicagoStyleClamPizza();
        } else if ($type == "pepperoni") {
            return new ChicagoStylePepperoniPizza();
        } else return Null;


    }

}