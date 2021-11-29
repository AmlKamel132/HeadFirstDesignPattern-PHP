<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Whip";
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}