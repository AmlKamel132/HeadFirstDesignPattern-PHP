<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\{
    Cheese,
    Clams,
    Dough,
    Pepperoni,
    Sauce,
    Veggies
};

abstract class Pizza
{

    protected string $name;
    protected Dough $dough;
    protected Sauce $sauce;
    protected Veggies $veggies;
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;

    abstract function prepare(): void;

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


    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function __toString(): string
    {
        // code to print pizza here
        return 'We Ordered ' . $this->name;
    }
}