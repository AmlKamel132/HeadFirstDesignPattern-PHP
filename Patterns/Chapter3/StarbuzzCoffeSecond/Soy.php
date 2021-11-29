<?php

namespace Patterns\Chapter3\StarbuzzCoffeSecond;

class Soy extends CondimentDecorator
{


    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Soy";
    }

    public function cost()
    {
        return 0.5 + $this->beverage->cost();
    }
}