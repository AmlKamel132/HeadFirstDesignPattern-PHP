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
    Cheese\ReggianoCheese,
    Clams\FreshClams,
    Dough\ThinCrustDough,
    Pepperoni\SlicedPepperoni,
    Sauce\MarinaraSauce
};

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Veggies\{
    Garlic,
    Mushroom,
    Onion,
    RedPepper
};


class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FreshClams();
    }
}