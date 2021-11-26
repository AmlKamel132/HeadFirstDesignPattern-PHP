<?php

namespace Tests\Chapter1\SimDuck;

use PHPUnit\Framework\TestCase;
use Patterns\Chapter1\SimUDuck\{
    FlyRocketPowered,
    MallardDuck,
    ModelDuck,
    Squeak
};

class SimUDuckTest extends TestCase
{

    public function testMallardDuckCanFlyWithWings()
    {
        $duck = new MallardDuck();
        self::assertEquals('I’m flying!!', $duck->performFly());
    }


    public function testMallardDuckCanFlyWithRocketPowered()
    {
        $duck = new MallardDuck();
        $duck->setFlyBehavior(new FlyRocketPowered());
        self::assertEquals('I’m fl ying with a rocket!', $duck->performFly());
    }

    public function testModelDuckQuackBehaviorIsQuack()
    {
        $duck = new ModelDuck();
        self::assertEquals('Quack', $duck->performQuack());
    }

    public function testModelDuckQuackBehaviorCanSqueaked()
    {
        $duck = new ModelDuck();
        $duck->setQuackBehavior(new Squeak());
        self::assertEquals('Squeak', $duck->performQuack());
    }


}