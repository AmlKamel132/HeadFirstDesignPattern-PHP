<?php

namespace Patterns\Chapter1\SimUDuck;

abstract class Duck
{

    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;

    public abstract function display(): void;

    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    public function swim(): void
    {
        echo "All ducks float, even decoys!";
    }


    public function setFlyBehavior(FlyBehavior $fb): void
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb): void
    {
        $this->quackBehavior = $qb;
    }


}