<?php

namespace Patterns\Chapter1\SimUDuck;

class FlyRocketPowered implements FlyBehavior
{

    public function fly(): string
    {
        return "I’m fl ying with a rocket!";
    }

}