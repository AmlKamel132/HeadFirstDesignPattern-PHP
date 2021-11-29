<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

class HouseBlend extends Beverage
{

    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost()
    {
        return 0.89;
    }
}
