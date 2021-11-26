<?php

namespace Patterns\Chapter1\SimUDuck;

class MuteQuack implements QuackBehavior
{

    public function quack(): string
    {
        return "<< Silence >>";
    }
}