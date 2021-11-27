<?php

namespace Patterns\Chapter2\WeatherORamaFirst;

class WeatherData implements Subject
{

    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;



    public function registerObserver(Observer $observer): void
    {
        $unique_id = spl_object_hash($observer);
        if (!isset($this->observers[$unique_id])) {
            $this->observers[$unique_id] = $observer;
        }
    }

    public function removeObserver(Observer $observer): void
    {
        $unique_id = spl_object_hash($observer);
        if (isset($this->observers[$unique_id])) {
            unset($this->observers[$unique_id]);
        }
    }

    public function notifyObservers(): void
    {

        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }

    }


    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}