<?php

namespace Patterns\Chapter1\SimUDuck;

class ModelDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I’m a model duck";
    }
}