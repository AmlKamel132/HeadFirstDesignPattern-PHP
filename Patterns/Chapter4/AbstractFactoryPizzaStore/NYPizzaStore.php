<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;


class NYPizzaStore extends PizzaStore
{

    protected function createPizza(string $type)
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type == "cheese") {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("New York Style Cheese Pizza");

        } else if ($type == "veggie") {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("New York Style Veggie Pizza");

        } else if ($type == "clam") {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("New York Style Clam Pizza");

        } else if ($type == "pepperoni") {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("New York Style Pepperoni Pizza");
        }

        return $pizza;
    }

}