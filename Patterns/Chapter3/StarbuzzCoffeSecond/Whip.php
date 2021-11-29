<?php

namespace Patterns\Chapter3\StarbuzzCoffeSecond;

class Whip extends CondimentDecorator
{

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Whip";
    }

    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}