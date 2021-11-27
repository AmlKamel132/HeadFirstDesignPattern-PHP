<?php

namespace Patterns\Chapter2\WeatherORamaFirst;

interface Observer
{
    public function update($temperature, $humidity, $pressure): void;

}