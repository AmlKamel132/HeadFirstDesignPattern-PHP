<?php


namespace Patterns\Chapter4\FactoryMethodPizzaStore;


class ChicagoStyleClamPizza extends Pizza
{

    public function __construct()
    {
        $this->name = "Chicago Style Clam Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        $this->toppings[] = "Shredded Mozzarella Cheese";
    }


    public function cut(): void
    {
        echo "Cutting the pizza into square slices" . "<br/>";
    }

}