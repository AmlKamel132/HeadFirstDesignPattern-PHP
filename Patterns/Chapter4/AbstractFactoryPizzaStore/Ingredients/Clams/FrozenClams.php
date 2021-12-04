<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Clams;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Clams;

class FrozenClams implements Clams
{

    public function __construct()
    {
        echo "Frozen Clams <br/>";
    }

}