<?php

namespace drholera\dhweather;

use yii\helpers\Html;
use drholera\Dhweather\model\WeatherSettings;

class Widgets extends \yii\base\Widget
{

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('form', ['model' => new WeatherSettings]);
    }

}