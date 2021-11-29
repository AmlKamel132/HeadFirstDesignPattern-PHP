<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

class Mocha extends CondimentDecorator
{


    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Mocha";
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost()
    {
        return 0.20 + $this->beverage->cost();
    }
}