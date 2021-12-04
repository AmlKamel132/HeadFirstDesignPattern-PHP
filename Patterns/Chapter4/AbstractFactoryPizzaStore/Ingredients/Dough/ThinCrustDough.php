<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Dough;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Dough;

class ThinCrustDough implements Dough
{
    public function __construct()
    {
        echo "Thin Crust Dough <br/>";
    }


}