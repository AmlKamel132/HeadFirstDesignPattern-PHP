<?php

namespace Patterns\Chapter2\WeatherORamaFirst;

interface Subject
{

    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers(): void;

}