<?php


namespace Patterns\Chapter4\SimplePizzaStore;


class PepperoniPizza extends Pizza
{

    public function __construct()
    {
        $this->name = "Pepperoni Pizza";
        $this->dough = "crust";
        $this->sauce = "White sauce";
        $this->toppings[] = "Pepperoni";

    }

}