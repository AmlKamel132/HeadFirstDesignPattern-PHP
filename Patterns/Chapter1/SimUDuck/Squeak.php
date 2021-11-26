<?php

namespace Patterns\Chapter1\SimUDuck;

class Squeak implements QuackBehavior
{

    public function quack(): string
    {
        return "Squeak";


        
    }

}