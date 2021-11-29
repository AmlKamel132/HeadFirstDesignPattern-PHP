<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "DarkRoast";
    }

    public function cost()
    {
        return 2.99;
    }
}