<?php

namespace Dhweather;


class Weather
{
    public $city;

    public function __construct($string)
    {
        var_dump(111);
        $this->city = $string;
    }

    /**
     * Get weather array
     */
    public function getCityWeather()
    {
        $this->location = $_POST['city'];
        $lang = 'en';
        $units = 'metric';

        $Weather = new OpenWeatherMap();
        $currentWeather = $Weather->getWeather($this->location, $units, $lang);

        $res = array(
            'body'    => print_r($currentWeather, true),
            'success' => true,
        );

        var_dump(111); die;

    }

}