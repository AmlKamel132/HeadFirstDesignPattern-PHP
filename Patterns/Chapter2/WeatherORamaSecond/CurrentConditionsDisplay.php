<?php

namespace Patterns\Chapter2\WeatherORamaSecond;

class CurrentConditionsDisplay implements Observer, DisplayElement
{

    private float $temperature;
    private float $humidity;
    private Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);

    }


    public function update(): void
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        echo("Current conditions: " . $this->temperature .
            "F degrees and " . $this->humidity . "% humidity" . "<br/>");
    }


}