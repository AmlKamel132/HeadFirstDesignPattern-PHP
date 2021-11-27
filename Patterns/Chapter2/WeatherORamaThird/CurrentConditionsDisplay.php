<?php

namespace Patterns\Chapter2\WeatherORamaThird;

use SplObserver;
use SplSubject;

class CurrentConditionsDisplay implements SplObserver, DisplayElement
{

    private float $temperature;
    private float $humidity;


    public function update(SplSubject $subject)
    {
        $this->temperature = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        echo("Current conditions: " . $this->temperature .
            "F degrees and " . $this->humidity . "% humidity" . "<br/>");
    }


}