<?php

namespace drholera\dhweather;

use yii\helpers\Html;
use drholera\Dhweather\model\WeatherSettings;
use drholera\Dhweather\Weather;

class Widgets extends \yii\base\Widget
{

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        if(!$weatherModel = WeatherSettings::find()->where(['not', ['city' => null] ])->one()){
            $weatherModel = new WeatherSettings();
        }

        $currentWeather = new Weather();
        if($currentWeather = $currentWeather->defaultWeather()){
            return $this->render('form', ['model' => $weatherModel, 'weather' => $currentWeather]);
        }
        else{
            return $this->render('form_default', ['model' => $weatherModel]);
        }

    }

}