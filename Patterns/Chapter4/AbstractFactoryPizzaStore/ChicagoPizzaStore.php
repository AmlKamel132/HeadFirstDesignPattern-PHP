<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;


class ChicagoPizzaStore extends PizzaStore
{


    protected function createPizza(string $type)
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type == "cheese") {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("Chicago Style Cheese Pizza");

        } else if ($type == "veggie") {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("Chicago Style Veggie Pizza");

        } else if ($type == "clam") {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("Chicago Style Clam Pizza");

        } else if ($type == "pepperoni") {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("Chicago Style Pepperoni Pizza");
        }

        return $pizza;
    }

}