<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Pepperoni;

use Patterns\Chapter4\AbstractFactoryPizzaStore\Ingredients\Interfaces\Pepperoni;


class SlicedPepperoni implements Pepperoni
{

    public function __construct()
    {
        echo "Sliced Pepperoni<br/>";
    }
}