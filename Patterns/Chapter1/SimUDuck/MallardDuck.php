<?php

namespace Patterns\Chapter1\SimUDuck;

class MallardDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I’m a real Mallard duck";
    }

}