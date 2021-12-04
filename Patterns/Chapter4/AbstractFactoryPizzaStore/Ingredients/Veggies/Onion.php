<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Veggies;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Veggies;

class Onion implements Veggies
{
    public function __construct()
    {
        echo "Onion <br/>";
    }


}