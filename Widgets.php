<?php

namespace drholera\Dhweather;

use yii\helpers\Html;
use drholera\Dhweather\model\WeatherSettings;

class Widgets extends \yii\base\Widget
{
    public $cityId;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('form', ['model' => new WeatherSettings]);
    }

}