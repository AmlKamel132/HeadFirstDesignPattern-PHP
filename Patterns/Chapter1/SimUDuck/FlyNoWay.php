<?php

namespace Patterns\Chapter1\SimUDuck;

class FlyNoWay implements FlyBehavior
{

    public function fly(): string
    {
        return "I can’t fly";
    }

}