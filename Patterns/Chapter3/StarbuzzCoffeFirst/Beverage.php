<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

abstract class Beverage
{

    protected string $description = "Unknown Beverage";

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();

}