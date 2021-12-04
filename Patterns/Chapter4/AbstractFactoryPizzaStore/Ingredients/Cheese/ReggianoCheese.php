<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Cheese;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Cheese;

class ReggianoCheese implements Cheese
{
    public function __construct()
    {
        echo "Reggiano Cheese <br/>";
    }

}