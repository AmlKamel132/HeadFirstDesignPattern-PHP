<?php

namespace Patterns\Chapter1\SimUDuck;

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return "Quack";
    }
}