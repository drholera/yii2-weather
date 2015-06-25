<?php

namespace drholera\dhweather;

use Cmfcmf\OpenWeatherMap;
use yii\helpers\Html;

class Widget extends \yii\base\Widget
{
    public $cityId;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('form');
    }

}