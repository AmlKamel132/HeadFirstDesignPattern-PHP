<?php

namespace Patterns\Chapter3\StarbuzzCoffeFirst;

abstract class CondimentDecorator extends Beverage
{

    public function getDescription()
    {
        throw new \Exception(" Must Implement getDescription in all subclasses ");
    }

}