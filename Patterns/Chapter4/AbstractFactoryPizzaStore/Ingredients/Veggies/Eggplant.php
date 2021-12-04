<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Veggies;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Veggies;


class Eggplant implements Veggies
{
    public function __construct()
    {
        echo "Eggplant <br/>";
    }

}