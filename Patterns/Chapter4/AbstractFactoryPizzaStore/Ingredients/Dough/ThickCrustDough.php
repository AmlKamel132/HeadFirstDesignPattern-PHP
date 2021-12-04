<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Dough;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Dough;

class ThickCrustDough implements Dough
{

    public function __construct()
    {
        echo "Thick Crust Dough <br/>";
    }

}