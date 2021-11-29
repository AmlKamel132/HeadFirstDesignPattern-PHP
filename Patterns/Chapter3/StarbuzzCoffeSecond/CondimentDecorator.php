<?php

namespace Patterns\Chapter3\StarbuzzCoffeSecond;

abstract class CondimentDecorator extends Beverage
{

    protected Beverage $beverage;

    public function getDescription()
    {
        return $this->beverage->getDescription() .
            ", " . $this->description;
    }

}