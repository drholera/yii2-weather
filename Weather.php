<?php

namespace drholera\Dhweather;

use Cmfcmf\OpenWeatherMap;
use drholera\Dhweather\model\WeatherSettings;

class Weather
{
    public function defaultWeather(){

        $lang = 'en';
        $units = 'metric';

        if($weatherModel = WeatherSettings::find()->where(['not', ['city' => null] ])->one()){
            $Weather = new OpenWeatherMap();
            $currentWeather = $Weather->getWeather($weatherModel->city, $units, $lang);

            return $currentWeather;
        }

        return false;
    }
}