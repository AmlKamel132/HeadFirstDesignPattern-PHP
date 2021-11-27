<?php

namespace Patterns\Chapter2\WeatherORamaSecond;

interface Subject
{

    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers(): void;

}