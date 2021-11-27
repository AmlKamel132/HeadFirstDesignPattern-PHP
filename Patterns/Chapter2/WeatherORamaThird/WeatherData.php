<?php

namespace Patterns\Chapter2\WeatherORamaThird;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class WeatherData implements SplSubject
{

    private $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;


    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function measurementsChanged()
    {
        $this->notify();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }


    public function getTemperature(): float
    {
        return $this->temperature;
    }


    public function getHumidity(): float
    {
        return $this->humidity;
    }


    public function getPressure(): float
    {
        return $this->pressure;
    }


}