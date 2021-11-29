<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

class Soy extends CondimentDecorator
{

    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = "Soy";
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost()
    {
        return 0.5 + $this->beverage->cost();
    }
}