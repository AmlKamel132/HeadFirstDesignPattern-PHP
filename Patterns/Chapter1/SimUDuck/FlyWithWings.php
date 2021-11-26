<?php

namespace Patterns\Chapter1\SimUDuck;

class FlyWithWings implements FlyBehavior
{


    public function fly(): string
    {
        return "I’m flying!!";
    }

}