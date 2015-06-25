<?php

namespace drholera\dhweather;

use GWLib;
use GWLib\GoogleWeather;

class Weather
{
    public $city;

    public function __construct($string)
    {
        $this->city = $string;
    }

    /**
     * Get weather array by city id
     * @param $string
     */
    public function getCityWeather($string)
    {
        $Weather = new GoogleWeather();
        $Weather->location = $string;
    }

}