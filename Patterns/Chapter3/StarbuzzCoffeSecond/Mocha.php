<?php

namespace Patterns\Chapter3\StarbuzzCoffeSecond;

class Mocha extends CondimentDecorator
{


    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Mocha";
    }

    public function cost()
    {
        return 0.20 + $this->beverage->cost();
    }
}