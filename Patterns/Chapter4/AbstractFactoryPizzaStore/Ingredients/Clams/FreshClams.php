<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Clams;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Clams;

class FreshClams implements Clams
{
    public function __construct()
    {
        echo "Fresh Clams <br/>";
    }

}