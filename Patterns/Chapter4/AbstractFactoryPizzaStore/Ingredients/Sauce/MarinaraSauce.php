<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Sauce;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Sauce;

class MarinaraSauce implements Sauce
{

    public function __construct()
    {
        echo "Marinara Sauce <br/>";
    }

}