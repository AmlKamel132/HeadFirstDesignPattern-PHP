<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Cheese;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Cheese;

class MozzarellaCheese implements Cheese
{

    public function __construct()
    {
        echo "Mozzarella Cheese <br/>";
    }

}