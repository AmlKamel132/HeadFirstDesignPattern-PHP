<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\{
    Cheese,
    Clams,
    Dough,
    Pepperoni,
    Sauce
};
use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\{
    Cheese\MozzarellaCheese,
    Clams\FrozenClams,
    Dough\ThickCrustDough,
    Pepperoni\SlicedPepperoni,
    Sauce\PlumTomatoSauce,
    Veggies\BlackOlives,
    Veggies\Eggplant,
    Veggies\Spinach
};


class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [new BlackOlives(), new Spinach(), new Eggplant()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}