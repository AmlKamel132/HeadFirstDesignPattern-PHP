<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NY StyleVeggie Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }


}