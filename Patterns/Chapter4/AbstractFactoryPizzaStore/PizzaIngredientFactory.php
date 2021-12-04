<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\{
    Cheese,
    Clams,
    Dough,
    Pepperoni,
    Sauce
};

interface PizzaIngredientFactory
{

    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clams;

}