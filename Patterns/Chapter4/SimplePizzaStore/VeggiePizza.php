<?php


namespace Patterns\Chapter4\SimplePizzaStore;


class VeggiePizza extends Pizza
{

    public function __construct()
    {
        $this->name = "Veggie Pizza";
        $this->dough = "crust";
        $this->sauce = "White sauce";
        $this->toppings[] = "mushrooms";
        $this->toppings[] = "olives";

    }

}