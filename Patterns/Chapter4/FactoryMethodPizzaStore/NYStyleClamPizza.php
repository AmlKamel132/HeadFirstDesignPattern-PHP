<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NY Style Clam Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }


}