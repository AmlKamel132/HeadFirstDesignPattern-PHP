<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class NYStylePepperoniPizza extends Pizza
{

    public function __construct()
    {
        $this->name = "NY Style Pepperoni Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }

}