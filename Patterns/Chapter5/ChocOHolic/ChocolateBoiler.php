<?php


namespace Patterns\Chapter5\ChocOHolic;


class ChocolateBoiler
{

    private bool $boiled;
    private bool $empty;
    private static $uniqueInstance;


    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(): ChocolateBoiler
    {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new ChocolateBoiler();
        }
        return self::$uniqueInstance;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            // fill the boiler with a milk/chocolate mixture
        }
    }

    public function drain(): void
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            // drain the boiled milk and chocolate
            $this->empty = true;
        }
    }

    public function boil(): void
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            // bring the contents to a boil
            $this->boiled = true;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }


    //avoid clone
    public final function __clone() {
        throw new BadMethodCallException("Not Allowed ");
    }



}