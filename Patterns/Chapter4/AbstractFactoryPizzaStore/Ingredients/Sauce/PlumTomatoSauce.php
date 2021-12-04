<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Sauce;


use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Sauce;

class PlumTomatoSauce implements Sauce
{

    public function __construct()
    {
        echo "Plum Tomato Sauce <br/>";
    }

}