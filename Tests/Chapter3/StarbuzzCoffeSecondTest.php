<?php

namespace Chapter3;

use Patterns\Chapter3\StarbuzzCoffeSecond\{
    DarkRoast,
    Mocha
};
use PHPUnit\Framework\TestCase;

class StarbuzzCoffeSecondTest extends TestCase
{

    public function testCanBuyDarkRoastWithMocha()
    {
        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);

        self::assertEquals('DarkRoast, Mocha', $beverage2->getDescription());

    }

    public function testCanBuyDarkRoastWithDoubleMocha()
    {

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);

        self::assertEquals('DarkRoast, Mocha, Mocha', $beverage2->getDescription());

    }


}