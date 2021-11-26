<?php

use Patterns\Chapter1\SimUDuck\{
    FlyRocketPowered,
    MallardDuck,
    ModelDuck
};

require __DIR__ . '/../../../../vendor/autoload.php';

$mallard = new MallardDuck();
echo $mallard->performQuack() . "<br/>";
echo $mallard->performFly() . "<br/>";


echo "------------------------<br/>";


$model = new ModelDuck();
echo $model->performFly() . "<br/>";
$model->setFlyBehavior(new FlyRocketPowered());
echo $model->performFly() . "<br/>";;