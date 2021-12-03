<?php


namespace Patterns\Chapter4\SimplePizzaStore;


abstract class Pizza
{

    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function prepare(): void
    {

        echo "Preparing  " . $this->name . "</br/>";
        echo "Tossing dough..." . "</br/>";
        echo "Adding sauce..." . "</br/>";
        echo "Adding toppings:" . "</br/>";

        for ($i = 0; $i < count($this->toppings); $i++) {
            echo " " . $this->toppings[$i] . "</br/>";
        }

    }


    public function bake(): void
    {
        echo "Bake for 25 minutes at 350" . "</br/>";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices" . "</br/>";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box" . "</br/>";
    }


    public function getName()
    {
        return $this->name;
    }


}