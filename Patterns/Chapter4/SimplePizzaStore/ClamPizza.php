<?php


namespace Patterns\Chapter4\SimplePizzaStore;


class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Clam Pizza";
        $this->dough = "crust";
        $this->sauce = "White sauce";
        $this->toppings[] = "Clams";

    }

}