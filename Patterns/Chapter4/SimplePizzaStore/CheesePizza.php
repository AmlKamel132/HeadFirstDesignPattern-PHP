<?php


namespace Patterns\Chapter4\SimplePizzaStore;


class CheesePizza extends Pizza
{
    public function __construct()
    {

        $this->name = "Cheese Pizza";
        $this->dough = "Crust";
        $this->sauce = "Sauce";
        $this->toppings[] = "Fresh Mozzarella";
    }

}