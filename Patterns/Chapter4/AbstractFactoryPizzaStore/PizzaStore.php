<?php


namespace Patterns\Chapter4\AbstractFactoryPizzaStore;


abstract class PizzaStore
{
    public function orderPizza(string $type)
    {

        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    protected abstract function createPizza(string $type);

}

